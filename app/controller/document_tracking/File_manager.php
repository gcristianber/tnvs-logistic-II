<?php

class File_manager{

    use Controller;

    public function index(){

        $DocumentsModel = new DTDocumentsModel;
        $DocReqAccessModel = new DTDocReqAccessModel;

        if($_SERVER["REQUEST_METHOD"] == "POST"){    

            $DocReqAccessModel->insertRequest($_POST);
            
            exit();
        }


        $data["view_table"] = $DocumentsModel->renderViewData();
        
        $this->view("document_tracking/file_manager", $data);
        $this->view('partials/sidebar');
    }

}