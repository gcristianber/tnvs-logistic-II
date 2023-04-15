<?php

session_start();

class Procurement_requests{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/procurement_requests");
        $this->view('partials/sidebar');
        
    }

    public function create_list(){
        $this->view("vendor_portal/admin/create_list");
        $this->view("partials/sidebar");
    }

}