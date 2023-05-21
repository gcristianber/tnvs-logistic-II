<?php

session_start();

class Audit_requests
{

    use Controller;

    public function index()
    {
        $data = [];

        $TransfersModel = new TransfersModel;
        $data["transfers"] = $TransfersModel->fetch_all_transfers();

        $this->view('partials/navbar');
        $this->view("audit_management/audit_requests", $data);
        $this->view('partials/sidebar');
    }

    public function create_report()
    {
        $data = [];

        $id = $_GET["transfer_id"];

        $TransferItemsModel = new TransferItemsModel;
        $data["transfer_items"] = $TransferItemsModel->fetch_items(["transfer_id"=>$id]);

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');
    }

    public function insert_report(){
        
        $TransferItemsModel = new TransferItemsModel;
        $TransferItemsModel->update_count(json_decode($_POST["products"]));
        
        $TransfersModel = new TransfersModel;
        $TransfersModel->update($_POST["transfer_id"], ["is_audited"=>1], "transfer_id");

        $report_details = array(
            "transfer_id"=>$_POST["transfer_id"],
            "comment"=>$_POST["comment"],
        );

        $TransferReportsModel = new TransferReportsModel;
        $TransferReportsModel->insert_report($report_details, $_FILES);
    }
}
