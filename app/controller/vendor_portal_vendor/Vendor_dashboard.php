<?php

class Vendor_dashboard{

    use Controller;

    public function index(){
        $this->view('vendor_portal/vendor/dashboard');
    }

}