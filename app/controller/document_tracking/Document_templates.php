<?php

class Document_templates
{

    use Controller;

    public function index()
    {
        $data = [];


        $this->view('partials/navbar');
        $this->view("document_tracking/document_templates", $data);
        $this->view('partials/sidebar');
        
    }
}
