<?php

class Track_documents{

    use Controller;

    public function index(){
        
        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents");
        $this->view('partials/sidebar');
        
    }

    public function tracking_id($id){

        $data = [];

        $TrackingModel = new DT_TrackingModel;
        $data["track_details"] = $TrackingModel->renderViewByCriteria(["tracking_id" => $id]);

        

        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents", $data);
        $this->view('partials/sidebar');
    }

}