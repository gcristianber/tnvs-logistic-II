<?php

session_start();

class Audit_reports{

    use Controller;

    public function index(){
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/audit_reports");
        $this->view('partials/sidebar');
    }

}