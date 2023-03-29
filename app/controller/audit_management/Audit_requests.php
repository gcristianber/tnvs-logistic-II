<?php

session_start();

class Audit_requests
{

    use Controller;

    public function index()
    {
        $data = [];
    
        $data["requests"] = $this->getAllRequests();

        $this->view('partials/navbar');
        $this->view("audit_management/audit_requests", $data);
        $this->view("partials/sidebar");
    }

    public function create($reference_number = '')
    {
        $data = [];
        $Requests = new AM_Requests;
        $data["request"] = $this->getRowRequest($reference_number);

        $this->view('partials/navbar');
        $this->view("audit_management/create_report", $data);
        $this->view('partials/sidebar');
    }

    public function fetch_by_category($category_id = '')
    {
        $data = [];
        $Inventory = new WHS_Inventory;

        echo json_encode($Inventory->where(["category_id"=>$category_id]));
    }

    public function fetch_all_category()
    {
        $data = [];
        $Inventory = new WHS_Inventory;

        echo json_encode($Inventory->findAll());
    }

    public function getAllRequests(){
        $Requests = new AM_Requests;
        return $Requests->renderView();
    }

    public function getRowRequest($reference_number = ''){
        $Requests = new AM_Requests;
        return $Requests->findRowView(["reference_number"=>$reference_number]);
    }
}
