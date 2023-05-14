<?php

session_start();

class Audit_reports
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["reports"] = $this->fetch_all_reports();

        // print_r($data);

        $this->view('partials/navbar');
        $this->view("audit_management/audit_reports", $data);
        $this->view('partials/sidebar');
    }

    public function fetch_all_reports()
    {
        $Reports = new AuditReportModel;
        return $Reports->fetch_all_reports();
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
}
