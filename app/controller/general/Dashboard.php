<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){

        $data = [];


        
        $this->view('partials/navbar');
        $this->view('general/dashboard', $data);
        $this->view('partials/sidebar');
        
    }

}