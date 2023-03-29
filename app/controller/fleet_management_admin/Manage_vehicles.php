<?php

session_start();

class Manage_vehicles{

    use Controller;

    public function index(){
        
        $data = [];

        $data["vehicles"] = $this->fetch();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/manage_vehicles", $data);
        $this->view("partials/sidebar");
        
    }

    public function insert(){      
        $vehicles = new FM_Vehicles;
        $vehicles->insert_vehicle($_POST, $_FILES);
    }

    public function fetch(){
        $vehicles = new FM_Vehicles;
        $data = $vehicles->renderView();

        return $data;
    }


}