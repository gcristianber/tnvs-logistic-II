<?php

class Incoming_documents
{

    use Controller;

    public function index()
    {
        $data = [];

        $DocumentsModel = new DTDocumentsModel;
        $data["view_table"] = $DocumentsModel->renderViewData();

        $this->view("document_tracking/incoming_documents", $data);
        $this->view('partials/sidebar');
    }
}
