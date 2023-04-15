<?php

session_start();

class Browse_vehicles
{

    use Controller;

    public function index()
    {

        $data = [];

        $data["vehicles"] = $this->fetch();

        $this->view('partials/navbar');
        $this->view('vehicle_reservation/browse_vehicles', $data);
        $this->view('partials/sidebar');
    }

    public function create_request()
    {
        $session_id = $_GET["PHPSESSID"];

        if (isset($session_id)) {
            $arr["user_id"] = $_SESSION["user_id"];

            $Users = new Users;
            $row = $Users->findRowView($arr);

            if ($row) {
                $_SESSION["user"] = $row;

                $data["vehicles"] = $this->fetch();

                $this->view('partials/navbar');
                $this->view('vehicle_reservation/browse_vehicles', $data);
                $this->view('partials/sidebar');
            }
        }
    }

    public function fetch()
    {
        $vehicles = new FM_Vehicles;
        $data = $vehicles->renderView();

        return $data;
    }

    public function reserve()
    {
        $reserve = new VR_Reservations;
        $reserve->insert_request($_POST, $_FILES);
    }
}
