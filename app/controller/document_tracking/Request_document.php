<?php

session_start();

class Request_document{

    use Controller;

    public function index(){
        $data = [];


        
        $this->view('partials/sidebar');
        $this->view('document_tracking/request_document', $data);
    }  

    public function requestor_form(){
        $data = [];


        
        $this->view('document_tracking/requestor_form', $data);
    }

}