<?php

class Compose_document{

    use Controller;

    public function index(){


        $this->view('partials/navbar');
        $this->view('partials/sidebar');
        $this->view("document_tracking/compose_document");
        
    }

}