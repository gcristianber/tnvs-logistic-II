<?php

class Renter_feedback{

    use Controller;

    public function index(){

        $this->view('vehicle_reservation/renter_feedback');
    }

}