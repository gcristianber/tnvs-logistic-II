<?php

class Cycle_count
{

    use Controller;

    public function index()
    {

        $AuditSchedModel = new AMAuditSched;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // $AuditSchedModel->addSchedule($_POST);
            print_r($_POST);
            $data = [
                "title"
            ];

            echo "Hello from php";
            exit();
        }


        $this->view("audit_management/cycle_count");
        $this->view("partials/sidebar");

    }

    public function getData(){

        $AuditSchedModel = new AMAuditSched;
        $data = $AuditSchedModel->findAll();

        // print_r($data);
        echo json_encode($data);
        // echo "hello";
    }
}
