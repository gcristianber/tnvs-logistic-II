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

    public function generate_report(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            print_r($_POST["audit_items"]);
            print_r($_POST["conclusion"]);
            print_r($_POST["title"]);
            $data = [
                "audit_report_id" => rand(999999, 100000000),
                "report_title" => $_POST["title"],
                "conclusion" => $_POST["conclusion"],
                "category_type_id" => $_POST["category_type_id"],
                "author_id" => "sa12345"
            ];

            $AuditReports = new AMAuditReports;
            $AuditReports->insert($data);

        }
    }

}