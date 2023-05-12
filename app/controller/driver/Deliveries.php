<?php

session_start();

class Deliveries
{

    use Controller;

    public function index()
    {

        $this->view('partials/navbar');
        $this->view("fleet_management/driver/deliveries");
        $this->view('partials/sidebar');
    }
}
