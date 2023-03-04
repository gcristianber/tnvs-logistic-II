<?php

class Manage_reservations
{

    use Controller;

    public $errors = [];

    public function index()
    {
        $data = [];



        $this->view("vehicle_reservation/manage_reservations", $data);
        $this->view("partials/sidebar", $data);

    }


}
