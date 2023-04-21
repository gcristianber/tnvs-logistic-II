<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        $Users = new AccountsModel;
        $arr["username"] = $_POST["username"];
        $arr["password"] = $_POST["password"];

        $row = $Users->fetch_user($arr);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($row && $row->password == $_POST["password"]) {
                $_SESSION["user"] = $row;

                redirect("general/dashboard");
            }
        }

        $this->view("auth/login", $data);
    }
}
