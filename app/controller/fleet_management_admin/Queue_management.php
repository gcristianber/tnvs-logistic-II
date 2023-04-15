<?php

session_start();

class Queue_management{

    use Controller;

    public function index(){

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/queue_management");
        $this->view("partials/sidebar");
        
    }

}