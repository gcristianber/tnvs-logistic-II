<?php

class Document_templates
{

    use Controller;

    public function index()
    {
        $data = [];

        $TemplatesModel = new DT_TemplatesModel;
        $data["templates"] = $TemplatesModel->renderAll();

        $this->view('partials/navbar');
        $this->view("document_tracking/document_templates", $data);
        $this->view('partials/sidebar');
        
    }

    public function insert_template(){
        print_r($_POST);
        $TemplatesModel = new DT_TemplatesModel;

        $data = [
            "template_id" => rand(99999999, 9999999999),
            "category_id" => $_POST["category_id"],
            "description" => $_POST["description"],
            "content" => $_POST["content"],
        ];

        $TemplatesModel->insert($data);

    }
}
