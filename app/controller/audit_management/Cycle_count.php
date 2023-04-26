<?php

session_start();

class Cycle_count
{

    use Controller;

    public function index()
    {
        $data = [];

        $Inventory = new InventoryModel;
        $data["products"] =  $Inventory->fetch_all_products();

        $this->view('partials/navbar');
        $this->view("audit_management/cycle_count", $data);
        $this->view('partials/sidebar');
    }

    public function preview()
    {
        $product_id = $_GET["product_id"];
        // $data["cycle_count"] = $this->get_cycle_count($product_id);
        $Inventory = new InventoryModel;
        $data["product"] = $Inventory->fetch_product(["product_id" => $product_id]);

        // print_r($data["product"]);

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $_POST["product_id"] = $product_id;
                $this->add_cycle_count($_POST);
                die;
            }
        }

        $this->view('partials/navbar');
        $this->view("audit_management/cycle_sheet", $data);
        $this->view('partials/sidebar');
    }

    public function add_cycle_count($data)
    {
        $CycleCount = new CycleCountModel;
        $Inventory = new InventoryModel;

        $row = $Inventory->fetch_product(["product_id" => $data["product_id"]]);

        $current_date = new DateTime('now');

        $frequency_count = $row->frequency_count;

        // Calculate the cycle count date based on the frequency count
        switch ($frequency_count) {
            case 'daily':
                $interval = new DateInterval('P1D');
                break;
            case 'weekly':
                $interval = new DateInterval('P1W');
                break;
            case 'monthly':
                $interval = new DateInterval('P1M');
                break;
            case 'quarterly':
                $interval = new DateInterval('P3M');
                break;
            case 'annually':
                $interval = new DateInterval('P1Y');
                break;
            default:
                throw new Exception('Invalid frequency count specified');
        }

        $cycle_count_date = clone $current_date;
        $cycle_count_date->add($interval);

        $data["last_count_date"] = $current_date->format('d-m-y h:i:s');
        $data["next_count_date"] = $cycle_count_date->format('d-m-y');

        print_r($data);
    }
}
