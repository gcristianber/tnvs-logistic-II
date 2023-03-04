<?php

session_start();

class Incoming_documents
{

    use Controller;

    public function index()
    {
        $data = [];

        $_SESSION["department_name"] = "administrative";

        $DocumentsModel = new DTDocumentsModel;
        $data["view_table"] = $DocumentsModel->renderViewData();
        // ! $data["view_table"] ----> $view_table

        $this->view("document_tracking/incoming_documents", $data);
        $this->view('partials/sidebar');
    }
}
