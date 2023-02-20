<?php


class Vendor_invites{

    use Controller;

    public function index(){

        $data = [];

        
        $this->view('vendor_portal/vendor/invites', $data);
    }

}