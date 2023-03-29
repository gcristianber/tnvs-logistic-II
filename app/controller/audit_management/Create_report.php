<?php

session_start();

class Create_report{

    use Controller;

    public function index(){
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');
    }

}