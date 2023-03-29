<?php

session_start();

class Manage_drivers{

    use Controller;


    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/manage_drivers");
        $this->view("partials/sidebar");
        
    }

}