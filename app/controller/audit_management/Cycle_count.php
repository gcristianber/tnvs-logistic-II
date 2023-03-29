<?php

session_start();

class Cycle_count
{

    use Controller;

    public function index()
    {
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/cycle_count", $data);
        $this->view('partials/sidebar');
    }

    public function setDate()
    {
        // print_r($_POST);
        $Cycle_count = new AM_Cycle_count;
        $_POST["cycle_count_id"] = uniqid();
        $Cycle_count->insert($_POST);
    }

    public function getDates()
    {
        $Cycle_count = new AM_Cycle_count;
        echo json_encode($Cycle_count->findAll());
    }

    public function view_report()
    {
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/view_report", $data);
        $this->view('partials/sidebar');
    }
}
