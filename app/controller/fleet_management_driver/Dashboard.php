<?php

class Dashboard{

    use Controller;

    public function index(){

        
        $this->view("fleet_management/driver/partials/sidebar");
        $this->view("fleet_management/driver/dashboard");
    }


}