<?php

class Create_report{

    use Controller;

    public function index(){

        $data = [];

        $this->view("audit_management/create_report", $data);

    }

}