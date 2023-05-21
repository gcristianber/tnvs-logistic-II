<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){
        $data = [];

        $this->checkAccess();

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