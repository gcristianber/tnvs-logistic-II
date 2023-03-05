<?php

class Renter_feedback{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view('vehicle_reservation/renter_feedback');
        $this->view('partials/navbar');
    }

}