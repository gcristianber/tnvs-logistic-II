<?php

class Cycle_count
{

    use Controller;

    public function index()
    {

        $AuditSchedModel = new AMAuditSched;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $AuditSchedModel->addSchedule($_POST);

            $data = $AuditSchedModel->findAll();
            echo json_encode($data);
        

            exit();
        }


        $this->view("audit_management/cycle_count");
        $this->view("partials/sidebar");

    }
}
