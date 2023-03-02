<?php

session_start();

class Reservations
{

    use Controller;

    public $errors = [];

    public function index()
    {
        $data = [];



        $this->view("vehicle_reservation/reservations", $data);
    }


}
