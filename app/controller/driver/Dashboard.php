<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){

        
        $this->view('partials/navbar');
        $this->view("fleet_management/driver/dashboard");
        $this->view('partials/sidebar');
    }


}