<?php 

session_start();

class Manage_vendors{

    use Controller;

    public function index(){

        $test = $this->get_all_vendors();

        // print_r($test);

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_vendors");
        $this->view("partials/sidebar");
        
    }

    public function get_all_vendors(){
        $Vendors = new VP_Vendors;
        return $Vendors->findAll();
    }

    public function manage_account($account_id=''){
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_account");
        $this->view("partials/sidebar");
    }
}