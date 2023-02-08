<?php

class Activity_log{

    use Controller;

    public $errors = [];

    public function index(){
        $data = [];
        $this->view("document_tracking/activity_log", $data);
    }

    public function access_grantees(){
        $data = [];
        $this->view("document_tracking/access_grantees", $data);
    }

    public function accessed_files(){
        $data = [];
        $this->view("document_tracking/accessed_files", $data);
    }

    public function issued_requests(){
        $data = [];
        $this->view("document_tracking/issued_requests", $data);
    }

    public function web_sessions(){
        $data = [];
        $this->view("document_tracking/web_sessions", $data);
    }
    
    


}