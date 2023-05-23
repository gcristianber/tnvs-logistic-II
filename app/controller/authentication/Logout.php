<?php

session_start();

class Logout
{

    use Controller;

    public function index()
    {

        if ($_SESSION["user"]->driver_id) {
            $DriverLogs = new DriverLogsModel;
            $logDetails = array(
                "log_id" => uniqid(),
                "activity" => "You logged out",
                "ip_address" => $_SERVER['REMOTE_ADDR'],
                "user_agent" => $_SERVER['HTTP_USER_AGENT'],
                "driver_id" => $_SESSION["user"]->driver_id
            );

            $DriverLogs->insert($logDetails);
        }

        unset($_SESSION);
        session_destroy();
        redirect("authentication/login");
    }
}
