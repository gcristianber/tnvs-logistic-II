<?php

session_start();

class Request_document{

    use Controller;

    public function index(){
        $data = [];

        $this->view('document_tracking/request_document', $data);
        $this->view('partials/sidebar');
    }  

    public function requestor_form(){
        $data = [];

        $DocumentReqModel = new DTDocReqModel;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $check = $DocumentReqModel->checkForm($_POST);

            if (!$check) {
                $error_alert = implode(",", $DocumentReqModel->errors);
                echo $error_alert;
            } else {
                $DocumentReqModel->insertData($_POST);
                header('Content-Type: application/json');
                echo json_encode(["success" => true]);
            }

            exit();
        }
        
        $this->view('partials/navbar');
        $this->view('document_tracking/requestor_form', $data);
        $this->view('partials/sidebar');
        
    }

}