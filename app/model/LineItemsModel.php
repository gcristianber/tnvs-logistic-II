<?php

class LineItemsModel
{

    use Model;

    protected $table = "log2_am_line_items";

    public function insert_line_items($data)
    {
        $prefix = "REPORT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["report_id"] = $prefix . $date . $random_str;

        // $this->insert($data);

        foreach ($data["line_items"] as $product_id => $actual_count) {
            $line_item_data = array(
                "line_item_id" => uniqid(),
                "report_id" => $data["report_id"],
                "product_id" => $product_id,
                "actual_count" => $actual_count,
                "location_id" => $data["location_id"]
            );
            // insert each line item into the database
            $this->insert($line_item_data);
        }
    }
}
