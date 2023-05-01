<?php

session_start();

class Awardings
{

    use Controller;

    public function index()
    {
        $data = [];
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/awardings", $data);
        $this->view('partials/sidebar');
    }
}
