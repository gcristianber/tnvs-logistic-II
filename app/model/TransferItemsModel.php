<?php

class TransferItemsModel
{

    use Model;

    protected $table = 'log1_whs_transfer_items';

    public function fetch_items($data, $data_not = [])
    {


        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT log1_whs_transfer_items.*,
        log1_whs_inventory.product_id,
        log1_whs_inventory.product_name,
        log1_whs_inventory.quantity
        FROM log1_whs_transfer_items 
        LEFT JOIN log1_whs_inventory ON
        log1_whs_transfer_items.product_id = log1_whs_inventory.product_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }

    public function update_count($products){

        print_r($products);

        foreach($products as $product){
            $this->update($product->product_id, ["actual_count"=>$product->actual_count], "transfer_item_id");
        }
    }
}
