<?php

class Browse_vehicles{

    use Controller;

    public function index(){

        $this->view('vehicle_reservation/browse_vehicles');
        $this->view('partials/sidebar');
    }

}