<?php

session_start();

class Track_documents
{

    use Controller;

    public function index()
    {
        $data["documents"] = $this->fetch_all_documents();

        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents", $data);
        $this->view('partials/sidebar');
    }

    public function track($tracking_id = ''){
        $data["document"] = $this->fetch_document($tracking_id);
        $data["tracks"] = $this->get_all_tracks($tracking_id);

        // $ipAddress = $_SERVER['REMOTE_ADDR'];
        // $userAgent = $_SERVER['HTTP_USER_AGENT'];
        // echo "IP Address: " . $ipAddress . "\nUser Agent: " . $userAgent;


        $this->view('partials/navbar');
        $this->view("document_tracking/document_log", $data);
        $this->view('partials/sidebar');
    }
    
    public function fetch_all_documents(){
        $Documents = new DocumentsModel;
        return $Documents->fetch_all_documents();
    }

    public function fetch_document($tracking_id){
        $Documents = new DocumentsModel;
        return $Documents->fetch_document(["tracking_id"=>$tracking_id]);
    }

    public function get_all_tracks($tracking_id){
        $Documents = new DocumentsModel;
        return $Documents->get_all_tracks(["tracking_id"=>$tracking_id]);
    }

    
}
