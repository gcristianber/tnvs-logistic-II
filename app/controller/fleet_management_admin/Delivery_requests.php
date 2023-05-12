<?php

session_start();

class Delivery_requests{

    use Controller;

    public function index(){

        $Delivery = new DeliveryModel;

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/delivery_requests");
        $this->view("partials/sidebar");
    }

    public function navigate(){
        $data =[];
        
        $this->view('partials/navbar');
        $this->view("fleet_management/admin/navigate_delivery", $data);
        $this->view("partials/sidebar");
    }

    public function create_new(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/create_delivery");
        $this->view("partials/sidebar");
    }

    public function insert_new_delivery(){
        $Delivery = new DeliveryModel;
        echo json_encode($Delivery->insert_new_delivery($_POST));
    }

    public function insert_line_items(){
        $DeliveryItems = new DeliveryItemsModel;   
        $DeliveryItems->insert_line_items($_POST);
    }

}