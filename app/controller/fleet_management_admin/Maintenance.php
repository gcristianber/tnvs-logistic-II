<?php

session_start();

class Maintenance{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/maintenance");
        $this->view("partials/sidebar");
        
    }

}