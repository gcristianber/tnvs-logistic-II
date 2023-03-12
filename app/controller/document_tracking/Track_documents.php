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

    public function get_result(){

        $id = $_POST["tracking_id"];

        $TrackingModel = new DT_TrackingModel;
        $result = $TrackingModel->renderViewByCriteria(["tracking_id" => $id]);


        echo json_encode($result);
    }

}