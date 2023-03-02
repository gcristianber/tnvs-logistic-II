<?php

class Purchase_requests{

    use Controller;

    public function index(){


        $this->view("vendor_portal/admin/purchase_requests");
        $this->view('partials/sidebar');
    }

}