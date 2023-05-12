<?php

session_start();

class _404{

    use Controller;

    public function index(){

        $this->view('error/_404');
        
    }

}