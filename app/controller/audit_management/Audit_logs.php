<?php

class Audit_logs{

    use Controller;

    public function index(){

        
        $this->view("audit_management/audit_logs");
        $this->view("partials/sidebar");
    }

}