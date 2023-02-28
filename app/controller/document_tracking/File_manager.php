<?php

class File_manager{

    use Controller;

    public function index(){


        $this->view('partials/sidebar');
        $this->view("document_tracking/file_manager");
    }

}