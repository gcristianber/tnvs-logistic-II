<?php

session_start();

class Activity_logs{

    use Controller;

    public function index(){

        $DriverLogsModel = new DriverLogsModel;
        $data["logs"] = $DriverLogsModel->where(["driver_id"=>$_SESSION["user"]->driver_id]);
        
        $this->view('partials/navbar');
        $this->view("fleet_management/driver/activity_logs", $data);
        $this->view('partials/sidebar');
    }


}