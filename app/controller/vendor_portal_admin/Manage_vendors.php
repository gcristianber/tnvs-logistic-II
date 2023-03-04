<?php 

class Manage_vendors{

    use Controller;

    public function index(){

        $this->view("vendor_portal/admin/manage_vendors");
        $this->view("partials/sidebar");
    }
}