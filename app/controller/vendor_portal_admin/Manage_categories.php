<?php

class Manage_categories{

    use Controller;

    public function index(){


        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/purchase_requests");
        $this->view('partials/sidebar');
        
    }

}