<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        $Users = new Accounts;
        $_POST["username"] = "super_admin@logistic";
        $_POST["password"] = "l0gistic@!";
        $arr["username"] = $_POST["username"];
        $arr["password"] = $_POST["password"];

        $row = $Users->fetch_user($arr);

        if($row && $row->password == $_POST["password"]){
            $_SESSION["user"] = $row;
            
            redirect("general/dashboard");
        }

        print_r($row);


        $this->view("auth/login", $data);
    }
}
