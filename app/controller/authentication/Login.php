<?php

session_start();

class Login
{

    use Controller;

    public function index()
    {

        $data = [];

        $Users = new Accounts;
        $arr["username"] = $_POST["username"];
        $row = $Users->fetch_accounts($arr);

        if ($row->password == $_POST["password"]) {
            
        }


        print_r($row);


        $this->view("auth/login", $data);
    }
}
