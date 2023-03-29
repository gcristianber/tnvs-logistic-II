<?php

session_start();

class Delivery_requests{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/delivery_requests");
        $this->view("partials/sidebar");
        
    }

}