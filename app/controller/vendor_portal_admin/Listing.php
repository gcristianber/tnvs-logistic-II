<?php 

session_start();

class Listing{

    use Controller;

    public function index(){
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/listing");
        $this->view("partials/sidebar");
        
    }

    public function create_list(){
        
        $this->view("vendor_portal/admin/create_list");
        $this->view("partials/sidebar");
    }

    public function manage_bid(){
        $this->view("vendor_portal/admin/manage_bid");
        $this->view("partials/sidebar");
    }
}