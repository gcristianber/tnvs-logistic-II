<?php

session_start();

class Folder{

    use Controller;

    public function index($folder_id = ''){

        $data = [];    

        $documentsModel = new DocumentsModel;
        $criteria = ["folder_id" => $folder_id];
        $data["documents"] = $documentsModel->renderViewByCriteria($criteria);

        $foldersModel = new FoldersModel;
        $data["folder_info"] = $foldersModel->searchViewByCriteria($criteria);

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST["control_number"] = uniqid("REQ-");
            $_POST['accessor_id'] = $_SESSION["user"]->user_id;
            $_POST['date_created'] = date("Y-m-d h:i:s");
            $_POST['start_date'] = null;
            $_POST['end_date'] = null;
            $_POST['endorser_id'] = null;
            $_POST['request_status_id'] = 1;

            $documentAccessModel = new DocumentAccessModel;
            $documentAccessModel->insert($_POST);
            die();
        }

        $this->view("document_tracking/folder_files", $data);
    }

    public function sendRequest($data){

    }


}