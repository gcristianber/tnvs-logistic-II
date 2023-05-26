<?php

session_start();

class Deliveries
{

    use Controller;

    public function index()
    {
        $data = [];

        $Deliveries = new DeliveryModel;
        $data["deliveries"] = $Deliveries->fetch_all_delivery();

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
        $DriverLogs = new DriverLogsModel;

        $Driver = new DriversModel;
        $checkDriverStatus = $Driver->fetch_driver(["driver_id" => $_SESSION["user"]->driver_id]);


        $logDetails = array(
            "log_id" => uniqid(),
            "ip_address" => $_SERVER['REMOTE_ADDR'],
            "user_agent" => $_SERVER['HTTP_USER_AGENT'],
            "driver_id" => $_SESSION["user"]->driver_id
        );

        if ($checkDriverStatus->status_name === 'on road') {
            // Driver is on road, don't update the delivery status
            return;
        }


        switch ($_POST["status"]) {
            case 'pending':
                $Delivery->update_status($_POST["id"], 'pending');
                break;
            case 'preparing':
                $Delivery->update_status($_POST["id"], 'preparing');
                break;
            case 'in transit':
                $Driver->update_status($_SESSION["user"]->driver_id, 'on road');
                $Delivery->update_status($_POST["id"], 'in transit');
                $logDetails["activity"] = $_POST["id"] . " is out for delivery";
                $DriverLogs->insert($logDetails);
                break;
            case 'delivered':
                $Delivery->update_status($_POST["id"], 'delivered');
                break;
        }
    }
}
