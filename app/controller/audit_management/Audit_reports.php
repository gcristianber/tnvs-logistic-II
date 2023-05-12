<?php

session_start();

class Audit_reports{

    use Controller;

    public function index(){
        $data = [];

        $data["reports"] = $this->fetch_all_reports();

        $this->view('partials/navbar');
        $this->view("audit_management/audit_reports", $data);
        $this->view('partials/sidebar');
    }
    
    public function fetch_all_reports(){
        $Reports = new AuditReportModel;
        return $Reports->fetch_all_reports();
    }

    public function view_report(){

        $report_id = $_GET["report_id"];
        $Reports = new AuditReportModel;
        $data["report"] = $Reports->fetch_report(["report_id"=>$report_id]);

        $LineItems = new LineItemsModel;
        $data["line_items"] = $LineItems->where(["report_id"=>$report_id]);

        $Attachments = new AuditAttachmentModel;
        $data["attachments"] = $Attachments->where(["report_id"=>$report_id]);


        $this->view('partials/navbar');
        $this->view("audit_management/view_report", $data);
        $this->view('partials/sidebar');
    }
}