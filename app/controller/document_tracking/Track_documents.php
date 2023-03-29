<?php

session_start();

class Track_documents{

    use Controller;

    public function index(){
        
        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents");
        $this->view('partials/sidebar');
        
    }

}