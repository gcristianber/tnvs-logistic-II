<?php

session_start();

class Manage_drivers{

    use Controller;


    public function index(){

        $data["drivers"] = $this->fetch_all_drivers();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/manage_drivers", $data);
        $this->view("partials/sidebar");
        
    }

    public function fetch_all_drivers(){
        $Drivers = new DriversModel;
        return $Drivers->fetch_all_drivers();
    }

}