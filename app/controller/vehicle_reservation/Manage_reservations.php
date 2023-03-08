<?php

class Manage_reservations
{

    use Controller;

    public function index()
    {
        $data = [];


        $ReservationsModel = new VRReservations;
        $data["reservations"] = $ReservationsModel->renderView();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/manage_reservations", $data);
        $this->view("partials/sidebar");
       

    }


    public function approve_request(){


        $ReservationsModel = new VRReservations;
        $VehiclesModel = new FMVehicles;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST["target_id"];
            $vehicle_id = $_POST["target_vehicle_id"];
            $ReservationsModel->update($id, ["reservation_status_id"=>2], "reservation_id" );
            $VehiclesModel->update($vehicle_id, ["vehicle_status_id"=>2], "vehicle_id" );
        }

    }

    public function dispatch_vehicle(){


        $ReservationsModel = new VRReservations;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST["target_id"];
            $ReservationsModel->update($id, ["reservation_status_id"=>3], "reservation_id" );
        }

    }

    public function return_vehicle(){


        $ReservationsModel = new VRReservations;
        $VehiclesModel = new FMVehicles;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST["target_id"];
            $vehicle_id = $_POST["target_vehicle_id"];
            $ReservationsModel->update($id, ["reservation_status_id"=>4], "reservation_id" );
            $VehiclesModel->update($vehicle_id, ["vehicle_status_id"=>1], "vehicle_id" );
        }

    }

}
