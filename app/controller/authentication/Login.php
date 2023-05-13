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
            }
        }

        $this->view("auth/login", $data);
    }

    public function driver()
    {
        $data = [];

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arr["username"] = $_POST["username"];
                $arr["password"] = $_POST["password"];

                $Users = new DriversModel;
                $row = $Users->fetch_driver($arr);

                if ($row && $row->password == $_POST["password"]) {
                    $_SESSION["user"] = $row;

                    redirect("general/dashboard");
                    exit();
                }
            }
        }

        $this->view("auth/driver_login", $data);
    }
}
