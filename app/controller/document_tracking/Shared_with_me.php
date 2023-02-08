<?php

session_start();

class Shared_with_me{

    use Controller;

    public function index(){

        $data = [];

        $documentAccessModel = new DocumentAccessModel;
        $criteria = [
            "accessor_id" => $_SESSION["user"]->user_id,
            "is_expired" => 0,
            "request_status_name" => "granted"
        ];

        $data["shared_with_me"] = $documentAccessModel->renderViewByCriteria($criteria);

        $this->view("document_tracking/shared_with_me", $data);
    }

    public function view_file($document_id){

        $data = [];


        $documentsModel = new DocumentsModel;
        $arr = [
            "document_id" => $document_id
        ];
        
        $data["document"] = $documentsModel->searchViewByCriteria($arr);

        
        $this->view("document_tracking/view_shared_file", $data);
    }


    public function edit_file($document_id){

        $data = [];

        $documentsModel = new DocumentsModel;
        $arr = [
            "document_id" => $document_id
        ];
        $data["document"] = $documentsModel->searchViewByCriteria($arr);

        // print_r($data["document"]);

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $change = [
                "content" => $_POST["content"],
                "date_modified" => date("Y-m-d h:i:s"), 
                "modifier_id" => $_SESSION["user"]->user_id,
            ];

            $target_id = $data["document"]->document_id;

            $documentsModel->update($target_id ,$change,'document_id');

            die();
        }

        $this->view("document_tracking/edit_shared_file", $data);
    }

}