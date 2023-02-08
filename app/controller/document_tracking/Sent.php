<?php

session_start();

class Sent{

    use Controller;

    public function index(){

        $data = [];

        $documentAccessModel = new DocumentAccessModel;
        $arr = ["accessor_id" => $_SESSION["user"]->user_id];
       
        $data["sent_requests"] = $documentAccessModel->renderViewByCriteria($arr);
        // print_r($data["sent_requests"]);

        $this->view("document_tracking/sent", $data);
    }

    public function getAccessType($data){
    }

}