<?php

class Audit_reports{

    use Controller;

    public function index(){
        $this->view("audit_management/audit_reports");
    }

}