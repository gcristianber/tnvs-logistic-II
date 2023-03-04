<?php

class Track_deliver{

    use Controller;


    public function index(){

        $this->view("fleet_management/admin/track_deliver");
        $this->view("partials/sidebar");
    }

}