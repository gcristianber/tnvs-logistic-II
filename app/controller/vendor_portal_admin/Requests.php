<?php

session_start();

class Requests{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/requests");
        $this->view('partials/sidebar');
        
    }

}