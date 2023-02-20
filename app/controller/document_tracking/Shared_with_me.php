<?php

session_start();

class Shared_with_me{

    use Controller;

    public function index(){

        $data = [];

        $this->view("document_tracking/shared_with_me", $data);
    }

  
}