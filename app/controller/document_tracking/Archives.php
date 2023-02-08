<?php

class Archives
{

    use Controller;

    public function index()
    {

        $data = [];

        $folderView = new ViewModel;
        $data["folders"] = $folderView->displayAll('folders_view');

        $this->view("document_tracking/archives", $data);
    }

    public function folder($department_name=''){

        $data = [
            "folder_name" => $department_name
        ];

        $view = new ViewModel;
        $data["files"] = $view->findAllByCriteria('files_view', $data);

        $test = [
            "folder_name" => $department_name
        ];
        
        $data["folder"] = $view->find('folders_view',$test);

        $this->view("document_tracking/folder_archive", $data);
    }
    

    
}
