<?php

session_start();

class Create_document{

    use Controller;

    public function index(){
        $data = [];


        
        $this->view('document_tracking/create_document', $data);
    }

    public function upload(){

        $data = [];


        $this->view('document_tracking/upload_document', $data);
    }

    public function compose($template_id = ''){

        $data = [];
        
        $this->view('document_tracking/compose_document', $data);
    }

}