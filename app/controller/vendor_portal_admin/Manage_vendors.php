<?php 

session_start();

class Manage_vendors{

    use Controller;

    public function index(){

        $data["vendors"] = $this->get_all_vendors();

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_vendors", $data);
        $this->view("partials/sidebar");
        
    }

    public function get_all_vendors(){
        $Vendors = new VendorsModel;
        return $Vendors->fetch_all_vendors();
    }

    public function create_invite(){
        
    }

}