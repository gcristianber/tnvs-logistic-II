<?php

class Create_report
{

    use Controller;

    public function index()
    {

        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the JSON data from the AJAX request

            $tableData = $_POST["tableData"];

            $AuditReportModel = new AMAuditReports;
            
            // print_r($tableData);

            $AuditReportModel->insertReport($tableData);

            // if($insert){
            //     echo "Success!";
            // }


            exit();
        }

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');
    }
}
