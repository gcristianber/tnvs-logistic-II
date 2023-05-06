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

    public function preview(){
        
    }

    public function navigate(){
        $data =[];
        
        $this->view('partials/navbar');
        $this->view("fleet_management/admin/navigate_delivery", $data);
        $this->view("partials/sidebar");
    }

}