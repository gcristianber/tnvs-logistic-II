<?php

class Accessed_documents{

    use Controller;

    public function index(){


        
        $this->view('partials/navbar');
        $this->view("document_tracking/accessed_documents");
        $this->view('partials/sidebar');
        
    }

}