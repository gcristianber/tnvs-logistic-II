<?php

class Incoming_documents{

    use Controller;

    public function index(){

        $this->view("document_tracking/incoming_documents");
    }

}