<?php

session_start();

class Login{

    use Controller;

    public function index(){

        $data = [];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $usersModel = new UsersModel;

            $arr["username"] = $_POST["username"];
            $row = $usersModel->searchViewByCriteria($arr);
            
            if($row){
                if($row->password == $_POST["password"]){
                    $_SESSION["user"] = $row;
                    redirect("general/dashboard");
                }
            }
                
        }

        $this->view("auth/login", $data);
    }



}