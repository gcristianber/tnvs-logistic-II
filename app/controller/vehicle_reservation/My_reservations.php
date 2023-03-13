<?php

class My_reservations
{

    use Controller;

    public function index()
    {
        $data = [];


        $ReservationsModel = new VRReservations;
        $data["reservations"] = $ReservationsModel->renderView();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/my_reservations", $data);
        $this->view("partials/sidebar");
       

    }

}
