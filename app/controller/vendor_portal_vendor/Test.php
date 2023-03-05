<?php

class Test {

    use Controller;

    public function index(){

        $this->view("vendor_portal/vendor/test");
    }
}