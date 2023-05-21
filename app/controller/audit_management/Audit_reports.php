<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

session_start();

class Audit_reports
{

    use Controller;

    public function index()
    {
        $data = [];
        $Reports = new AuditReportModel;
        $data["cycle_count_reports"] = $Reports->fetch_all_reports();

        $TransferReportsModel = new TransferReportsModel;
        $data["transfer_reports"] = $TransferReportsModel->fetch_all_reports();

        $this->view('partials/navbar');
        $this->view("audit_management/audit_reports", $data);
        $this->view('partials/sidebar');
    }


    public function view_report()
    {

        $report_id = $_GET["report_id"];
        $Reports = new AuditReportModel;
        $data["report"] = $Reports->fetch_report(["report_id" => $report_id]);

        $LineItems = new LineItemsModel;
        $data["line_items"] = $LineItems->where(["report_id" => $report_id]);

        $Attachments = new AuditAttachmentModel;
        $data["attachments"] = $Attachments->where(["report_id" => $report_id]);


        $this->view('partials/navbar');
        $this->view("audit_management/view_report", $data);
        $this->view('partials/sidebar');
    }

    public function update_status()
    {
        $Reports = new AuditReportModel;
        switch ($_POST["status"]) {
            case 'issued':
                $Reports->update_status($_POST["id"], 'issued');
                break;
            case 'in progress':
                $Reports->update_status($_POST["id"], 'in progress');
                break;
            case 'solve':
                $Reports->update_status($_POST["id"], 'solve');
                break;
        }
    }

    public function download_report()
    {
        $report_id = $_GET["report_id"];
        $Reports = new AuditReportModel;
        $data["report"] = $Reports->fetch_report(["report_id" => $report_id]);

        $LineItems = new LineItemsModel;
        $data["line_items"] = $LineItems->where(["report_id" => $report_id]);

        $Attachments = new AuditAttachmentModel;
        $data["attachments"] = $Attachments->where(["report_id" => $report_id]);


        $dompdf = new Dompdf\Dompdf();

        ob_start();
        $this->view("audit_management/template/report_template", $data);
        $html = ob_get_clean();

        $dompdf->loadHtml($html);

        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($report_id . ".pdf", array("Attachment" => 1));
    }

    public function download_as_sheet()
    {
        $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $report_id = $_GET["report_id"];
        $TransferReportsModel = new TransferReportsModel;
        $data = $TransferReportsModel->fetch_report(["report_id" => $report_id]);

        $transfer_id = $data->transfer_id;
        $TransferItemsModel = new TransferItemsModel;
        $items = $TransferItemsModel->fetch_items(["transfer_id" => $transfer_id]);



        $sheet->mergeCells('A1:E1');
        $sheet->setCellValue('A1', 'Inventory Transfer Report');
        $alignment = $sheet->getStyle('A1')->getAlignment();
        $alignment->setHorizontal(PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $sheet->setCellValue('A2', 'Transfer Type:');
        $sheet->setCellValue('B2', $data->transfer_type_name);
        $sheet->setCellValue('D2', 'Date Created:');
        $sheet->setCellValue('E2', date("d/m/Y — h:i A", strtotime($data->date_created)));

        $sheet->mergeCells('A3:E3');
        $sheet->setCellValue('A3', $data->comment);
        $comment = $sheet->getStyle('A3')->getAlignment();
        $comment->setHorizontal(PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $row = 6;
        $sheet->setCellValue('A5', 'Product ID');
        $sheet->setCellValue('B5', 'Product Name');
        $sheet->setCellValue('C5', 'Quantity');
        $sheet->setCellValue('D5', 'Variance');
        $sheet->setCellValue('E5', 'Actual Count');

        foreach ($items as $row_data) {
            $sheet->setCellValue('A' . $row, $row_data->product_id);
            $sheet->setCellValue('B' . $row, $row_data->product_name);
            $sheet->setCellValue('C' . $row, $row_data->quantity);
            $sheet->setCellValue('D' . $row, $row_data->variance);
            $sheet->setCellValue('E' . $row, $row_data->actual_count);
            $row++;
        }

        // Autofit all columns
        $highestColumn = $sheet->getHighestColumn();
        $columnIterator = $sheet->getColumnIterator();
        foreach ($columnIterator as $column) {
            $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
        }

        $spreadsheet->getActiveSheet()->getStyle('A5:E5')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ]
        ]);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);


        $filename = $report_id . '.xlsx';

        $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        // Set the headers for the download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Save the spreadsheet to a temporary file
        $writer->save('php://output');

        // Exit the script
        exit();
    }
}
