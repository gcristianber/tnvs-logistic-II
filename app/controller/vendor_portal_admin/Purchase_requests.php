<?php

class Purchase_requests{

    use Controller;

    public function index(){

        $PurchaseRequests = new VPPurchaseRequests;
        $data["purchase_requests"] = $PurchaseRequests->renderView();


        $this->view('partials/navbar'); 
        $this->view("vendor_portal/admin/purchase_requests", $data);
        $this->view('partials/sidebar');
        
    }

    public function approve_request(){

        $PurchaseRequest = new VPPurchaseRequests;


        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST["target_id"];
            $PurchaseRequest->update($id, ["pr_status_id"=>2], "pr_id" );
        }
    }

}