<?php

session_start();

class Awardings
{

    use Controller;

    public function index()
    {
        $data = [];
        $Awards = new TenderAwardsModel;
        $data["awards"] = $Awards->fetch_all_awards();
        
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/awardings", $data);
        $this->view('partials/sidebar');
    }
}
