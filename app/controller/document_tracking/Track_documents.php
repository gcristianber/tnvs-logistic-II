<?php

session_start();

class Track_documents
{

    use Controller;

    public function index()
    {
        $Documents = new DocumentsModel;
        $data["documents"] =  $Documents->fetch_all_documents();

        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents", $data);
        $this->view('partials/sidebar');
    }

    public function track($id)
    {
        $data = [];

        $Documents = new DocumentsModel;
        $Tracks = new TrackDocumentModel;
        $data["tracks"] = $Tracks->get_all_tracks(["tracking_id" => $id]);
        $data["document"] = $Documents->fetch_document(["tracking_id" => $id]);

        // print_r($data["tracks"]);

        $this->view('partials/navbar');
        $this->view("document_tracking/track", $data);
        $this->view('partials/sidebar');
    }

    public function download_sheet()
    {
        $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $id = $_GET["tracking_id"];
        $TracksModel = new TrackDocumentModel;
        $tracks = $TracksModel->get_all_tracks(["tracking_id" => $id]);

        $DocumentsModel = new DocumentsModel;
        $document = $DocumentsModel->fetch_document(["tracking_id" => $id]);

        $sheet->mergeCells('A1:E1');
        $sheet->setCellValue('A1', 'Document Tracking Sheet');
        $alignment = $sheet->getStyle('A1')->getAlignment();
        $alignment->setHorizontal(PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $sheet->setCellValue('A2', 'Tracking ID:');
        $sheet->mergeCells('B2:E2');
        $sheet->setCellValue('B2', $document->tracking_id);
        $alignment = $sheet->getStyle('B2')->getAlignment();

        $sheet->setCellValue('A3', 'Subject:');
        $sheet->setCellValue('B3', $document->subject);
        $sheet->setCellValue('D3', 'Date Created:');
        $sheet->setCellValue('E3', date("d/m/Y — h:i A", strtotime($document->sent_date)));

        
        $sheet->setCellValue('A4', 'Date & Time');
        $sheet->setCellValue('B4', 'Remarks');
        $sheet->setCellValue('C4', 'Status');
        $sheet->setCellValue('D4', 'Action By');
        $sheet->setCellValue('E4', 'IP Address');

        $row = 5;
        foreach ($tracks as $row_data) {
            $sheet->setCellValue('A' . $row, date("d/m/Y — h:i A", strtotime($row_data->action_date)));
            $sheet->setCellValue('B' . $row, $row_data->remarks);
            $sheet->setCellValue('C' . $row, $row_data->status_name);
            $sheet->setCellValue('D' . $row, $row_data->display_name);
            $sheet->setCellValue('E' . $row, $row_data->ip_address);
            $row++;
        }


        $filename = 'test.xlsx';

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
