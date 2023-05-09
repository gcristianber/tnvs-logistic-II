<?php

session_start();

class Inventory{

    use Controller;

    public function index(){
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/products");
        $this->view('partials/sidebar');
    }

}