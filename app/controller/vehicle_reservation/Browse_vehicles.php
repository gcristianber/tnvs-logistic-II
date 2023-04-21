<?php

session_start();

class Browse_vehicles
{

    use Controller;

    public function index()
    {

        $data = [];

        $data["vehicles"] = $this->get_all_vehicles();

        $this->view('partials/navbar');
        $this->view('vehicle_reservation/browse_vehicles', $data);
        $this->view('partials/sidebar');
    }

    public function create_request()
    {
        $session_id = $_GET["PHPSESSID"];

        if (isset($session_id)) {
            $arr["user_id"] = $_SESSION["user_id"];

            $Users = new Accounts;
            $row = $Users->fetch_user($arr);

            if ($row) {
                $_SESSION["user"] = $row;

                $data["vehicles"] = $this->get_all_vehicles();

                $this->view('partials/navbar');
                $this->view('vehicle_reservation/browse_vehicles', $data);
                $this->view('partials/sidebar');
            }
        }
    }

    public function insert_reservation(){
        $Reservations = new Reservations;
        $Reservations->insert_reservation($_POST, $_FILES);
    }

    public function get_all_vehicles(){
        $Vehicles = new Vehicles;
        return $Vehicles->fetch_all_vehicles();
    }
}
