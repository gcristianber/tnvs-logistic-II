<?php

class Navigation{

    use Controller;

    public function index(){

        $data = [];


        $this->view("fleet_management/navigation", $data);
    }



}