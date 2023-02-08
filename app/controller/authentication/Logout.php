<?php

session_start();

class Logout{

    use Controller;

    public function index(){
        redirect("authentication/login");
    }



}