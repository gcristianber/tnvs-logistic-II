<?php

class LineItemsModel
{

    use Model;

    protected $table = "log2_am_line_items";
    

    public function insert_line_items($data)
    {
        $line_items = json_decode($_POST['line_items'], true);

        foreach ($line_items as $product) {


            $line_item_data = array(
                "line_item_id" => uniqid(),
                "report_id" => $data["report_id"],
                "product_id" => $product["productId"],
                "product_name" => $product["productName"],
                "quantity" => $product["quantity"],
                "actual_count" => $product["inputValue"],
                "location_id" => $data["location_id"]
            );
            // insert each line item into the database
            $this->insert($line_item_data);
        }
    }
}
