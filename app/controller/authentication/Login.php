<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        $Users = new Accounts;
        $arr["username"] = "super_admin@logistic";
        $row = $Users->fetch_accounts($arr);

        echo "Hellosss";
        print_r($row);


        $this->view("auth/login", $data);
    }
}
