<?php

class Dashboard {

    use Controller;

    public function index(){

        $this->view("vendor_portal/vendor/dashboard");
        $this->view("vendor_portal/vendor/partials/sidebar");
    }
}