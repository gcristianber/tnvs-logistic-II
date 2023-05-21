<?php

session_start();

class Manage_documents
{

    use Controller;

    public function index()
    {

        $data = [];

        $Documents = new DocumentsModel;
        $data["documents"] = $Documents->fetch_all_documents();
        // print_r($Documents->fetch_all_documents());

        $this->view('partials/navbar');
        $this->view("document_tracking/manage_documents", $data);
        $this->view('partials/sidebar');
    }

    public function update_status()
    {
        $Documents = new DocumentsModel;
        switch ($_POST["status"]) {
            case 'incoming':
                $Documents->update_status($_POST["id"], 'incoming');
                break;
            case 'outgoing':
                $Documents->update_status($_POST["id"], 'outgoing');
                break;
            case 'pending':
                $Documents->update_status($_POST["id"], 'dispatch');
                break;
            case 'received':
                $Documents->update_status($_POST["id"], 'received');
                break;
            case 'reviewed':
                $Documents->update_status($_POST["id"], 'reviewed');
                break;
            case 'declined':
                $Documents->update_status($_POST["id"], 'declined');
                break;
        }
    }
}
