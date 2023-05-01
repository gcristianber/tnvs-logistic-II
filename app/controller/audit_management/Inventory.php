<?php

session_start();

class Inventory{

    use Controller;

    public function index(){
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/inventory");
        $this->view('partials/sidebar');
    }

    public function manage_location(){
        $this->view('partials/navbar');
        $this->view("audit_management/manage_location");
        $this->view('partials/sidebar');
    }

}