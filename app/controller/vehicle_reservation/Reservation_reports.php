<?php

session_start();

class Reservation_reports
{

    use Controller;

    public function index()
    {
        $data = [];


        $this->view('partials/navbar');
        $this->view("vehicle_reservation/reservation_reports", $data);
        $this->view("partials/sidebar");
    }

    public function insert_report(){
        
    }
}
