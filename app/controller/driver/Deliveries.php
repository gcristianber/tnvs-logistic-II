<?php

session_start();

class Deliveries
{

    use Controller;

    public function index()
    {

        $Deliveries = new DeliveryModel;
        $data["deliveries"] = $Deliveries->where(["driver_id" => $_SESSION["user"]->driver_id]);
        // print_r($Deliveries->where(["driver_id"=>$_SESSION["user"]->driver_id]));

        $this->view('partials/navbar');
        $this->view("fleet_management/driver/deliveries", $data);
        $this->view('partials/sidebar');
    }

    public function view_delivery()
    {
        $data = [];

        $Delivery = new DeliveryModel;
        $data["delivery"] = $Delivery->fetch_delivery(["tracking_id" => $_GET["tracking_id"]]);

        $this->view('partials/navbar');
        $this->view("fleet_management/driver/view_delivery", $data);
        $this->view('partials/sidebar');
    }

    public function update_status()
    {
        $Delivery = new DeliveryModel;
        switch ($_POST["status"]) {
            case 'pending':
                $Delivery->update_status($_POST["id"], 'pending');
                break;
            case 'preparing':
                $Delivery->update_status($_POST["id"], 'preparing');
                break;
            case 'in transit':
                $Delivery->update_status($_POST["id"], 'in transit');
                break;
            case 'delivered':
                $Delivery->update_status($_POST["id"], 'delivered');
                break;
        }
    }
}
