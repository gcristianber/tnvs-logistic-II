<?php

class Accounts{

    use Controller;

    public function index(){
        $this->view("vendor_portal/accounts");
    }

}