<?php

session_start();

class My_reservations
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["userReservations"] = $this->getUserReservations();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/my_reservations", $data);
        $this->view("partials/sidebar");
    }

    public function getUserReservations(){
        $Reservations = new ReservationsModel;
        return $Reservations->fetch_user_reservations(["requestor_id"=>$_SESSION["user"]->user_id]);
    }

    public function fetch_user_reservations(){

    }

}
