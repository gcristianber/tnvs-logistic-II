<?php

class Manage_vendor_contracts{

    use Controller;

    public function index(){

        $this->view("vendor_portal/admin/manage_vendor_contracts");
        $this->view('partials/sidebar');
    }

}