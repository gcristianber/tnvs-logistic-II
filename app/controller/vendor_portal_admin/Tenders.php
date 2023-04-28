<?php

session_start();

class Tenders{

    use Controller;

    public function index(){

        $data["tenders"] = $this->fetch_all_tenders();

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/tenders", $data);
        $this->view('partials/sidebar');
        
    }

    public function preview_tender(){
        $data = [];

        $tender_id = $_GET["tender_id"];

        $Tenders = new TendersModel;
        $data["tender"] = $Tenders->fetch_tender(["tender_id"=>$tender_id]);
        $Bids = new TenderBidsModel;
        $data["bids"] = $Bids->fetch_bids(["tender_id"=>$tender_id]);

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/preview_tender", $data);
        $this->view('partials/sidebar');
    }

    public function fetch_all_tenders(){
        $TendersModel = new TendersModel;
        return $TendersModel->fetch_all_tenders();
    }

    public function fetch_bids_by_criteria(){
        $data = $_POST;
        $Bids = new TenderBidsModel;
    }
    

}