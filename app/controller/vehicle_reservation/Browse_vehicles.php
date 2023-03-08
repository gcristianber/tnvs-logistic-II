<?php

class Browse_vehicles
{

    use Controller;

    public function index()
    {

        $data = [];

        $FMVehicles = new FMVehicles;

        $data["vehicles"] = $FMVehicles->renderViewData();

        $this->view('partials/navbar');
        $this->view('vehicle_reservation/browse_vehicles', $data);
        $this->view('partials/sidebar');
    }

    public function reserve_vehicle()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST["reservation_id"] = uniqid("rsv");
            $_POST["hirer_id"] = "sa12345";

            $ReservationModel = new VRReservations;
            $ReservationModel->insert($_POST);

           
        }
    }
}
