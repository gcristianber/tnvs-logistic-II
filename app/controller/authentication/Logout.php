<?php

session_start();

class Logout{

    use Controller;

    public function index(){
        unset($_SESSION);
        session_destroy();
        redirect("authentication/login");
    }



}