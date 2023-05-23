<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arr["username"] = $_POST["username"];
                $arr["password"] = $_POST["password"];

                $Users = new AccountsModel;
                $row = $Users->fetch_user($arr);

                if ($row && $row->password == $_POST["password"]) {
                    $_SESSION["user"] = $row;

                    redirect("general/dashboard");
                    exit();
                }

                $Drivers = new DriversModel;
                $driver = $Drivers->fetch_driver($arr);

                if ($driver && $driver->password == $_POST["password"]) {
                    $_SESSION["user"] = $driver;

                    $DriverLogs = new DriverLogsModel;
                    $logDetails = array(
                        "log_id" => uniqid(),
                        "activity" => "You logged in",
                        "ip_address" => $_SERVER['REMOTE_ADDR'],
                        "user_agent" => $_SERVER['HTTP_USER_AGENT'],
                        "driver_id" => $_SESSION["user"]->driver_id
                    );

                    $DriverLogs->insert($logDetails);

                    redirect("general/dashboard");
                    exit();
                }
            }
        }

        $this->view("auth/login", $data);
    }
}
