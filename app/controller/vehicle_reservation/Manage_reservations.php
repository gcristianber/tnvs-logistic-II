<?php

session_start();

class Manage_reservations
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["userReservations"] = $this->getReservations();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/manage_reservations", $data);
        $this->view("partials/sidebar");
       

    }

    public function getReservations(){
        $Reservations = new VR_Reservations;
        return $Reservations->renderView();
    }

}
