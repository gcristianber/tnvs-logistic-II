<?php

session_start();

class Create_document{

    use Controller;

    public function index(){
        $data = [];


        
        $this->view('document_tracking/create_document', $data);
    }

    public function compose($template_id = ''){

        $data = [];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            print_r($_POST);

            $content = $_POST["content"];

            $encode = base64_encode($content);

            echo $encode;

            $decode = base64_decode($encode);

            echo $encode;
            
            die();

        }
        
        $this->view('document_tracking/compose_document', $data);
    }

}