<?php

class Grant_documents{

    use Controller;

    public function index(){

        $this->view('partials/sidebar');
        $this->view("document_tracking/grant_documents");
    }

}