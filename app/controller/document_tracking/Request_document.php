<?php

session_start();

class Request_document{

    use Controller;

    public function index(){
        $data = [];

        $RequestModel = new DT_RequestModel;
        $data["requests"] = $RequestModel->renderAll();

        $this->view('document_tracking/request_document', $data);
        $this->view('partials/sidebar');
    }  

    public function send_data(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // print_r($_POST);
            $RequestModel = new DT_RequestModel;

            // !TODO 1: Check the form
            // $check = $RequestModel->check($_POST);

            // !TODO 2: If the check method returns true then execute the code below.
            // if($check){
            //     $RequestModel->send($_POST);
            // }
            $send = $RequestModel->send($_POST);

            if($send){
                $TrackingModel = new DT_TrackingModel;
                $TrackingModel->insertNew($send);

                echo $send;
            }
        }
    }

    public function fetch_data(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $RequestModel = new DT_RequestModel;
            $data = $RequestModel->findAll();

            echo json_encode($data);
        }
    }

}