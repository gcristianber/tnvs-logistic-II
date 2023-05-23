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
        
        $logDetails = array(
            "log_id" => uniqid(),
            "ip_address" =>$_SERVER['REMOTE_ADDR'],
            "user_agent" =>$_SERVER['HTTP_USER_AGENT'],
            "driver_id"=> $_SESSION["user"]->driver_id
        );

        switch ($_POST["status"]) {
            case 'pending':
                $Delivery->update_status($_POST["id"], 'pending');              
                break;
            case 'preparing':
                $Delivery->update_status($_POST["id"], 'preparing');
                break;
            case 'in transit':
                $Delivery->update_status($_POST["id"], 'in transit');
                $logDetails["activity"] = $_POST["id"] . " is out for delivery" ;
                $DriverLogs->insert($logDetails);
                break;
            case 'delivered':
                $Delivery->update_status($_POST["id"], 'delivered');
                break;
        }
    }
}
