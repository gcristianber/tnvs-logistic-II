<?php

class Vendor_contracts{

    use Controller;

    public function index(){
        $this->view("vendor_portal/admin/vendor_contracts");
        $this->view('partials/sidebar');
    }

}