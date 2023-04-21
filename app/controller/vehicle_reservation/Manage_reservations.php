<?php

session_start();

class Manage_reservations
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["reservations"] = $this->fetch_all_reservations();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/manage_reservations", $data);
        $this->view("partials/sidebar");
    }

    public function fetch_all_reservations()
    {
        $Reservations = new ReservationsModel;
        return $Reservations->fetch_all_reservations();
    }

    public function update_status()
    {
        print_r($_POST);
        $Reservations = new VR_Reservations;
        $id = $_POST["id"];
        $status_type = $_POST["status_type"];

        switch ($status_type) {
            case "approve":
                $Reservations->update($id, ["status_id" => 2], "reservation_id");
                break;
            case "decline":
                $Reservations->update($id, [
                    "status_id" => 3,
                ], "reservation_id");
                break;
        }
    }
}
