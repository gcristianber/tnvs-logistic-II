<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){

        print_r($_SESSION);
        $data = [];
        
        $this->view('partials/navbar');
        $this->view('general/dashboard', $data);
        $this->view('partials/sidebar');
        
    }

}