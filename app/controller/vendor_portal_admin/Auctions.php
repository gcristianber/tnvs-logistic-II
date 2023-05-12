<?php

session_start();

class Auctions
{

    use Controller;

    public function index()
    {
        $data =[];

        // print_r($data["tenders"]);
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/auctions", $data);
        $this->view('partials/sidebar');
    }


}
