<?php

class Create_report{

    use Controller;

    public function index(){
        $data = [];

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');
    }

    public function getTable(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $category_id = $_POST["category_id"];
            $WHSInventory = new WHSInventory;
            $items = $WHSInventory->renderViewByCriteria(["category_id"=>$category_id]);

            echo json_encode($items);
        }

    }

}