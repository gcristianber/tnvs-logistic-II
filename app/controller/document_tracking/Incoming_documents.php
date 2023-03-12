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

    public function review_request(){

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 2], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 2
            ]
            );

    }

    public function working_request(){

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 3], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 3
            ]
            );

    }

    public function release_request(){

        $RequestModel = new DT_RequestModel;
        $TrackingModel = new DT_TrackingModel;

        $tracking_id = $_POST["tracking_id"];
        // ? Updates the target id's current status in Request Table
        $RequestModel->update($tracking_id, ["current_status_id" => 4], "tracking_id");

        $TrackingModel->insert(
            [
                "tracking_id" => $_POST["tracking_id"],
                "remarks" => $_POST["remarks"],
                "status_id" => 4
            ]
            );

    }
}
