<?php

class Compose_document{

    use Controller;

    public function index(){

        $this->view("document_tracking/compose_document");
    }

}