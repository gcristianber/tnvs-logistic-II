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

    public function add_driver(){
        $Drivers = new DriversModel;
        $_POST["avatar_thumbnail"] = $_FILES["avatar_thumbnail"];
        $Drivers->add_driver($_POST, $_FILES);
    }

    public function fetch_all_drivers(){
        $Drivers = new DriversModel;
        return $Drivers->fetch_all_drivers();
    }

    public function export_csv(){
        $Drivers = new DriversModel;
        $Drivers->export_csv();
    }

}