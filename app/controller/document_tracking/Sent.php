<?php

session_start();

class Sent{

    use Controller;

    public function index(){

        $data = [];
        $documentTrackerModel = new DocumentTrackerModel;
        $trackerFeedbackModel = new TrackerFeedbackModel;
        $arr = [
            "author_name" => $_SESSION["user"]->fullname
        ];
        $data["tracker_status"] = $trackerFeedbackModel->renderView();
        $data["sent"] = $documentTrackerModel->renderViewByCriteria($arr);

        $this->view("document_tracking/sent", $data);
    }

}