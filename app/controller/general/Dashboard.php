<?php

session_start();

class Dashboard{

    use Controller;

    public function index(){

        $data = [];


        $this->view('partials/sidebar');
        $this->view('general/dashboard', $data);
        
    }

}