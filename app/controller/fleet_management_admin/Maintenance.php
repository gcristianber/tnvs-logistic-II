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

    public function get_all_maintenance(){
        $Vehicles = new Vehicles;
        return $Vehicles->fetch_all_maintenance();
    }

    public function get_all_vehicles(){
        $Vehicles = new Vehicles;
        return $Vehicles->fetch_all_vehicles();
    }
    
}
