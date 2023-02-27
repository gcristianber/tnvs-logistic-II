<?php

session_start();

class Send_document{

    use Controller;

    public function index(){

        $data = [];

        $this->view("document_tracking/send_document", $data);
    }



    public function upload_document(){

        $data = [];

        $this->view("document_tracking/upload_document", $data);
    }



    public function compose_document(){

        $data = [];

        $this->view("document_tracking/compose_document", $data);
    }


}