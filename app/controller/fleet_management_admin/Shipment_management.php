<?php

session_start();

class Shipment_management{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/shipment_management");
        $this->view("partials/sidebar");
        
    }

    public function add_new(){
        $this->view('partials/navbar');
        $this->view("fleet_management/admin/add_new_delivery");
        $this->view("partials/sidebar");
    }

}