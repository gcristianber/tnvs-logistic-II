<?php

session_start();

class Portal_requests
{

    use Controller;

    public function index()
    {

        $TendersModel = new TendersModel;
        $data["tenders"] = $TendersModel->fetch_all_tenders();

        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/portal_requests", $data);
        $this->view("partials/sidebar");
    }

    public function manage_post()
    {

        $data = [];

        $tender_id = $_GET["tender_id"];

        $TendersModel = new TendersModel;
        $Bids = new TenderBidsModel;
        $LineItems = new TenderLinesModel;
        $data["tender"] = $TendersModel->fetch_tender(["tender_id" => $tender_id]);
        $data["bids"] = $Bids->fetch_bids(["tender_id" => $tender_id]);
        $data["line_items"] = $LineItems->where(["tender_id" => $tender_id]);

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

    public function update_status()
    {
        $Tenders = new TendersModel;
        switch ($_POST["status"]) {
            case 'pending':
                $Tenders->update_status($_POST["id"], 'pending');
                break;
            case 'publish':
                $Tenders->update_status($_POST["id"], 'publish');
                break;
            case 'awarded':
                $Tenders->update_status($_POST["id"], 'awarded');
                break;
        }
    }
}
