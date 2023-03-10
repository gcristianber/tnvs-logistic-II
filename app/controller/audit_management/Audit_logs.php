<?php

class Audit_logs{

    use Controller;

    public function index(){

        $AuditReportModel = new AMAuditReports;
        $data["audit_reports"] = $AuditReportModel->renderView();

        // print_r($data["audit_reports"]);
        
        $this->view("audit_management/audit_logs", $data);
        $this->view("partials/sidebar");
        $this->view('partials/navbar');
    }


}