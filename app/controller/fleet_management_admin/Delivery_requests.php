<?php

session_start();

class Delivery_requests{

    use Controller;

    public function index(){

        $Delivery = new DeliveryModel;
        $data["deliveries"] = $Delivery->fetch_all_delivery();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/delivery_requests", $data);
        $this->view("partials/sidebar");
    }

    public function navigate(){
        $data =[];
        
        $this->view('partials/navbar');
        $this->view("fleet_management/admin/navigate_delivery", $data);
        $this->view("partials/sidebar");
    }

    public function create_new(){

        $Drivers = new DriversModel;
        $data["drivers"] = $Drivers->fetch_all_drivers();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/create_delivery", $data);
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