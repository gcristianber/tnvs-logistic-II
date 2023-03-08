<?php

class Manage_post{

    use Controller;

    public function index($pr_id){

        $PurchaseRequests = new VPPurchaseRequests;
        $data["purchase_request"] = $PurchaseRequests->searchByCriteria(["pr_id"=>$pr_id]);

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_post", $data);
        $this->view('partials/sidebar');
        
    }

}