<?php

session_start();

class Maintenance
{

    use Controller;

    public function index()
    {

        $data["maintenance"] = $this->get_all_maintenance();
        $data["vehicles"] = $this->get_all_vehicles();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/maintenance", $data);
        $this->view("partials/sidebar");
    }

    public function insert_new_maintenance(){
        $Maintenance = new MaintenanceModel;
        $Maintenance->insert_new_maintenance($_POST);
        // print_r($_POST);
        // return false;
    }

    public function get_all_maintenance(){
        $Maintenance = new MaintenanceModel;
        return $Maintenance->fetch_all_maintenance();
    }

    public function get_all_vehicles(){
        $Vehicles = new VehiclesModel;
        return $Vehicles->fetch_all_vehicles();
    }
    
}
