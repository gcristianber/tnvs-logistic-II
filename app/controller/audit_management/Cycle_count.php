<?php

session_start();

class Cycle_count
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["products"] =  $this->get_all_products();

        $this->view('partials/navbar');
        $this->view("audit_management/cycle_count", $data);
        $this->view('partials/sidebar');
    }

    public function preview()
    {
        $product_id = $_GET["product_id"];
        $data["cycle_count"] = $this->get_cycle_count($product_id);
        $Inventory = new WHS_Inventory;
        $data["product"] = $Inventory->findRowView(["product_id" => $product_id]);

        $this->view('partials/navbar');
        $this->view("audit_management/cycle_sheet", $data);
        $this->view('partials/sidebar');
    }

    public function insert_cycle_count()
    {
        $Cycle_count = new AM_Cycle_count;
        $product_id = $_POST["product_id"];
        $product = $this->get_product($product_id);
        $frequency_count = $product->frequency_count;
        $current_count_date = new DateTime();

        // Calculate the next count date based on the frequency count
        switch ($frequency_count) {
            case 'weekly':
                $interval = new DateInterval('P7D');
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
                // Handle invalid frequency counts here
                break;
        }
        $current_count_date->add($interval);
        $next_count_date = $current_count_date->format('y-m-d h:i:s');

        $Cycle_count->insert([
            "cc_id" => uniqid("cc-"),
            "product_id" => $product_id,
            "actual_count" => $_POST["actual_count"],
            "variance" => $_POST["variance"],
            "remarks" => $_POST["remarks"],
            "accuracy" => $_POST["accuracy"],
            "next_count_date" => $next_count_date
        ]);

        

        $Inventory = new WHS_Inventory;
        $Inventory->update($product_id, [
            "last_count_date"=>date("y-m-d h:i:s"),
            "next_count_date"=>$next_count_date
        ], "product_id");
    }

    public function get_cycle_count($product_id)
    {
        $Cycle_count = new AM_Cycle_count;
        return $Cycle_count->renderViewByCriteria(["product_id" => $product_id]);
    }

    public function get_all_products()
    {
        $inventory_model = new WHS_Inventory;
        return $inventory_model->renderView();
    }

    public function get_all_products_by_category($category)
    {
        $inventory_model = new WHS_Inventory;
        return $inventory_model->renderViewByCriteria(["category_name" => $category]);
    }


    public function get_product($product_id)
    {
        $inventory_model = new WHS_Inventory;
        return $inventory_model->findRowView(["product_id" => $product_id]);
    }
}
