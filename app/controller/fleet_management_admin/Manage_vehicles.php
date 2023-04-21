<?php

session_start();

class Manage_vehicles
{

    use Controller;

    public function index()
    {

        $data = [];

        $Vehicles = new VehiclesModel;
        $data["vehicles"] = $Vehicles->fetch_all_vehicles();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/manage_vehicles", $data);
        $this->view("partials/sidebar");
    }

    public function get_all_vehicles(){
        $Vehicles = new VehiclesModel;
        return $Vehicles->fetch_all_vehicles();
    }

    public function put_vehicle(){
        $Vehicles = new VehiclesModel;
        $Vehicles->insert_vehicle($_POST, $_FILES);
    }
}
