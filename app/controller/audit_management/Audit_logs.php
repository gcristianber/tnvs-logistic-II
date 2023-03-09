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

    public function create_report($audit_id){


        $data = [];

        $AuditReportModel = new AMAuditReports;
        $data["audit_report"] = $AuditReportModel->first(["audit_report_id"=>$audit_id]);

        $target_category_id =  $data["audit_report"]->category_type_id;

        $WHSInventory = new WHSInventory;
        $data["items_to_audit"] = $WHSInventory->renderViewByCriteria(["category_id" => $target_category_id ]);

        

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');

    }

}