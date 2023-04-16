<?php

session_start();

class Delivery_requests{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/delivery_requests");
        $this->view("partials/sidebar");
        
    }

    public function add_new_delivery(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/add_new_delivery");
        $this->view("partials/sidebar");
    }

    public function insert_delivery(){
        // $Delivery = new FM_Delivery;
        // $Delivery->insert([

        // ])

        print_r($_POST);
        print_r($_FILES);
    }

}