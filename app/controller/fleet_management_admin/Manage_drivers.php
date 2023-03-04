<?php

class Manage_drivers{

    use Controller;


    public function index(){

        $this->view("fleet_management/admin/manage_drivers");
        $this->view("partials/sidebar");
    }

}