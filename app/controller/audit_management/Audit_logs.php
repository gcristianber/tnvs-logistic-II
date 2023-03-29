<?php

session_start();

class Audit_logs
{

    use Controller;

    public function index()
    {
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/audit_logs", $data);
        $this->view("partials/sidebar");
    }
}
