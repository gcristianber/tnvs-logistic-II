<?php

class Manage_reservations
{

    use Controller;

    public function index()
    {
        $data = [];


        $this->view('partials/navbar');
        $this->view("vehicle_reservation/manage_reservations");
        $this->view("partials/sidebar");
       

    }



}
