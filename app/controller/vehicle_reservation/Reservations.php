<?php

session_start();

class Reservations
{

    use Controller;

    public $errors = [];

    public function index()
    {
        $data = [];


        $VRReservationsModel = new VRReservations;
        $data["reservations"] = $VRReservationsModel->renderView();


        $this->view("vehicle_reservation/reservations", $data);
    }


}
