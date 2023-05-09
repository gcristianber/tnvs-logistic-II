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

    public function update_status()
    {
        $Reservations = new ReservationsModel;
        switch ($_POST["status"]) {
            case 'cancel':
                $Reservations->update_status($_POST["id"], 'cancel');
                print_r("cancel");
                break;
            default:
                # code...
                break;
        }
    }

    public function update_details()
    {
        $Reservations = new ReservationsModel;
        $id = $_POST["reservation_id"];
        unset($_POST["reservation_id"]);
        $Reservations->update_details($id, $_POST);
    }

    public function getUserReservations()
    {
        $Reservations = new ReservationsModel;
        return $Reservations->fetch_user_reservations(["requestor_id" => $_SESSION["user"]->user_id]);
    }

    public function fetch_user_reservations()
    {
    }
}
