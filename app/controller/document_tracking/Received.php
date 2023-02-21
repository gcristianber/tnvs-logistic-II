<?php
session_start();

class Received{

    use Controller;

    public function index(){

        $data = [];
        $documentTrackerModel = new DocumentTrackerModel;
        $trackerFeedbackModel = new TrackerFeedbackModel;
        $arr = [
            "category_dept_name" => $_SESSION["user"]->department_name,
            "status_name" => "received"
        ];
        $data["tracker_status"] = $trackerFeedbackModel->renderView();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $documentTrackerModel->actionRequest($_POST);
        }
        
        $data["received"] = $documentTrackerModel->renderViewByCriteria($arr);
        $this->view("document_tracking/received", $data);
    }


    

}