<?php

session_start();

class Profile{

    use Controller;

    public function index(){

        $data = [];


        
        $this->view('partials/navbar');
        $this->view('general/profile', $data);
        $this->view('partials/sidebar');
        
    }

}