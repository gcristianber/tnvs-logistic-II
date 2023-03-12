<?php

session_start();

class Incoming_documents
{

    use Controller;

    public function index()
    {
        $data = [];

        $RequestModel = new DT_RequestModel;
        $data["requests"] = $RequestModel->renderAll();

        $this->view('partials/navbar');
        $this->view("document_tracking/incoming_documents", $data);
        $this->view('partials/sidebar');
        
    }
}
