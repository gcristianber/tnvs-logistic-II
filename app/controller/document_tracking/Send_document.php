<?php

session_start();

class Send_document
{

    use Controller;

    public function index()
    {

        $data = [];

        $DocumentsModel = new DTDocumentsModel;
        $DocumentCategoryModel = new DTDocCategoryModel;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $check = $DocumentsModel->checkForm($_POST, $_FILES);

            if (!$check) {
                $error_alert = implode(",", $DocumentsModel->errors);
                echo $error_alert;
            } else {
                header('Content-Type: application/json');
                echo json_encode(["success" => true]);
            }

            exit();
        }

        $data["categories"] = $DocumentCategoryModel->findAll();
        $data["view_table"] = $DocumentsModel->renderViewData();

        $this->view('partials/navbar');
        $this->view("document_tracking/send_document", $data);
        $this->view('partials/sidebar');
        
    }


    public function edit_document()
    {
        $data = [];

        $DocumentsModel = new DTDocumentsModel;

        $this->view("document_tracking/edit_document", $data);
        $this->view('partials/sidebar');
    }

    public function compose_document()
    {

        $data = [];
        $DocumentsModel = new DTDocumentsModel;
        $DocumentCategoryModel = new DTDocCategoryModel;
        $check = $DocumentsModel->checkCompose($_POST);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $check = $DocumentsModel->checkCompose($_POST);

            if (!$check) {
                $error_alert = implode(",", $DocumentsModel->errors);
                echo $error_alert;
            } else {
                $id = uniqid("doc");
                
                $compose_data = [
                    "document_id"=> $id,
                    "title"=> $_POST["title"],
                    "category"=> $_POST["category"],
                    "purpose"=> $_POST["purpose"],
                    "content"=> $_POST["content"],
                ];

                $DocumentsModel->insertCompose($compose_data);

                header('Content-Type: application/json');
                echo json_encode(["success" => true]);            
            }

            exit();
        }

        $data["categories"] = $DocumentCategoryModel->findAll();

       
        $this->view('partials/navbar');
        $this->view("document_tracking/compose_document", $data);
        $this->view('partials/sidebar');
        
    }
}
