<?php

session_start();

class Listing
{

    use Controller;

    public function index()
    {
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/listing");
        $this->view("partials/sidebar");    
    }

    public function category()
    {
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/listing_category");
        $this->view("partials/sidebar");
    }

    public function view_request(){
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/view_request");
        $this->view("partials/sidebar");
    }
}
