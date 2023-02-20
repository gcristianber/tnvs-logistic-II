<?php

session_start();

class Compose_document{

    use Controller;

    public function index(){
        $data = [];
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            

            $documentTrackerModel = new DocumentTrackerModel;
            $documentTrackerModel->compose($_POST);
            die();
        }

        $documentCategoryModel = new DocumentCategoryModel;

        $arr = [
            "department_name" => $_SESSION["user"]->department_name
        ];
        $data["categories"] = $documentCategoryModel->renderViewByCriteria($data = [] ,$arr);
        
        $this->view('document_tracking/compose_document', $data);
    }

}