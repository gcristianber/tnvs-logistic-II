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
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/preview_tender", $data);
        $this->view('partials/sidebar');
    }

    public function fetch_all_tenders(){
        $TendersModel = new TendersModel;
        return $TendersModel->fetch_all_tenders();
    }

}