<?php

session_start();

class Shipment_management{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/shipment_management");
        $this->view("partials/sidebar");
        
    }

}