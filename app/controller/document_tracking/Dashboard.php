<?php

session_start();

class Dashboard{

    use Controller;

    public $errors = [];

    public function index(){

        $data = [];

        $folderModel = new FoldersModel;
        $data["folders"] = $folderModel->renderView();

        $documentAccessModel = new DocumentAccessModel;
        $arr = [
            "folder_name" => $_SESSION["user"]->department_name,
            "request_status_name" => "sent"
        ];
        $data["recent_received"] = $documentAccessModel->renderViewByCriteria($arr);

        // print_r( $data["recent_received"]);

        // print_r($_SESSION);

        $this->view("document_tracking/dashboard", $data);
    }
    
    


}