<?php


class Document_requests{

    use Controller;

    public function index(){
        $data = [];


        
        $this->view('document_tracking/document_requests', $data);
    }  

}