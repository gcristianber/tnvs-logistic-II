<?php

session_start();

class Track_documents
{

    use Controller;

    public function index()
    {

        $Documents = new Documents;
        $data["documents"] = $Documents->fetch_all();

        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents", $data);
        $this->view('partials/sidebar');
    }

    public function track($tracking_id = ''){
        $Documents = new Documents;
        $data["documents"] = $Documents->fetch_document(["tracking_id"=>$tracking_id]);

        $this->view('partials/navbar');
        $this->view("document_tracking/document_log", $data);
        $this->view('partials/sidebar');
    }

    
}
