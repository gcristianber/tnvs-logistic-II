<?php

class Contracts{

    use Controller;
    public function index(){
        $this->view("vendor_portal/contracts");
    }

    public function view_contract(){
        $this->view("vendor_portal/contracts_view");
    }
}