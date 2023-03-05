<?php

class Purchase_requests{

    use Controller;

    public function index(){



        

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/purchase_requests");
        $this->view('partials/sidebar');
        
    }

    public function manage_post(){

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_post");
        $this->view('partials/sidebar');
        
    }

}