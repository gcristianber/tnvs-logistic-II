<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){
        $data = [];
        $this->checkAccess();

        $Delivery = new DeliveryModel;
        $data["deliveries"] = $Delivery->fetch_all_delivery();

        $Documents = new DocumentsModel;
        $data["documents"] = $Documents->fetch_all_documents();

        $Drivers = new DriversModel;
        $data["drivers"] = $Drivers->fetch_all_drivers();

        // print_r($this->get_all_deliveries());
        
        $this->view('partials/navbar');
        $this->view('general/dashboard', $data);
        $this->view('partials/sidebar');
        
    }

    public function get_all_deliveries(){
        $Deliveries = new DeliveryModel;

        // print_r($Deliveries->fetch_all_delivery());
    
        echo json_encode($Deliveries->fetch_all_delivery());
    }

}