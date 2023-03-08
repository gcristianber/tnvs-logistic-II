<?php

class Auction_request{

    use Controller;

    public function index(){


        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/purchase_requests");
        $this->view('partials/sidebar');
        
    }

}