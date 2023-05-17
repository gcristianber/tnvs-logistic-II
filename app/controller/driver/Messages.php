<?php

session_start();
class Messages{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/driver/messages");
        $this->view('partials/sidebar');
    }


}