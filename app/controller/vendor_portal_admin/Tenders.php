<?php

session_start();

class Tenders{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/tenders");
        $this->view('partials/sidebar');
        
    }

    public function preview_tender(){
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/preview_tender");
        $this->view('partials/sidebar');
    }

    public function get_request(){
    }

    public function get_all_request(){

    }

    public function update_status(){
        $reference_number   = $_POST["reference_number"];
        $status_name        = $_POST['status_name'];
        switch($status_name){

        }
    }

}