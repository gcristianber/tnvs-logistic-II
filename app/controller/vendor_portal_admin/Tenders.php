<?php

session_start();

class Tenders
{

    use Controller;

    public function index()
    {

        $data["tenders"] = $this->fetch_all_tenders();
        // print_r($data["tenders"]);
        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/tenders", $data);
        $this->view('partials/sidebar');
    }

    public function preview_tender()
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
        $this->view("vendor_portal/admin/preview_tender", $data);
        $this->view('partials/sidebar');
    }

    public function submit_bid()
    {
        $Bids = new TenderBidsModel;
        $Bids->submit_bid($_POST);
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

    public function award_bid()
    {
        $Award = new TenderAwardsModel;
        $Bids = new TenderBidsModel;
        $Bids->update($_POST["bid_id"], ["is_awarded" => 1], "bid_id");
        $data["award_id"] = strtoupper('AWARD-' . substr(uniqid(), 0, 8));
        $data["bid_id"] = $_POST["bid_id"];
        $Award->insert($data);

        // print_r($_POST);
    }

    public function fetch_all_tenders()
    {
        $TendersModel = new TendersModel;
        return $TendersModel->fetch_all_tenders();
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
