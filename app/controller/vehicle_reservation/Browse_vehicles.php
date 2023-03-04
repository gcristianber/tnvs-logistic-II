<?php

class Browse_vehicles{

    use Controller;

    public function index(){

        $data = [];

        $FMVehicles = new FMVehicles;

        $data["vehicles"] = $FMVehicles->renderViewData();

        $this->view('vehicle_reservation/browse_vehicles', $data);
        $this->view('partials/sidebar');
    }

}