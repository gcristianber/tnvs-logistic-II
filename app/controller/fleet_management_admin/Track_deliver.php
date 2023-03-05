<?php

class Track_deliver{

    use Controller;


    public function index(){

        $this->view('partials/navbar'); 
        $this->view("fleet_management/admin/track_deliver");
        $this->view("partials/sidebar");
       
    }

}