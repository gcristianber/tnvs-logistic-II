<?php

session_start();

class Portal_requests
{

    use Controller;

    public function index()
    {

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/portal_requests");
        $this->view("partials/sidebar");
    }

    public function manage_post()
    {

        $data = [];

        $tender_id = "TND-488AFH1";

        $TendersModel = new TendersModel;
        $Bids = new TenderBidsModel;
        $data["tenders"] = $TendersModel->fetch_all_tenders();

        $data["bids"] = $Bids->fetch_bids(["tender_id" => $tender_id]);

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_post", $data);
        $this->view('partials/sidebar');
    }

    public function compare_bid()
    {
        $Bids = new TenderBidsModel;
        $allBidData = array();

        foreach ($_POST["array"] as $item) {
            $bidData = $Bids->fetch_bids(["bid_id" => $item]);
            $allBidData[] = $bidData;
        }
        echo json_encode($allBidData);
    }
}
