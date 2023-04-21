<?php

class InventoryModel
{

    use Model;

    protected $table = "log1_whs_inventory";

    public function fetch_all_products(){

        $query = 'SELECT inventory.product_id,
        inventory.product_name,
        inventory.quantity,
        inventory.unit_cost,
        inventory.total,
        inventory.purchase_date,
        inventory.inbound_date,
        inventory.last_count_date,
        inventory.next_count_date,

        category.category_name,

        location.location_name,
        location.frequency_count,

        supplier.supplier_name
        
        FROM log1_whs_inventory inventory
        LEFT JOIN log1_whs_category category ON
        inventory.category_id = category.category_id

        LEFT JOIN log1_whs_locations location ON
        location.location_id = category.location_id

        LEFT JOIN log1_whs_suppliers supplier ON
        supplier.supplier_id = inventory.supplier_id';

        return $this->query($query);
    }

    public function fetch_product($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT inventory.product_id,
        inventory.product_name,
        inventory.quantity,
        inventory.unit_cost,
        inventory.total,
        inventory.purchase_date,
        inventory.inbound_date,
        inventory.last_count_date,
        inventory.next_count_date,

        category.category_name,

        location.location_name,
        location.frequency_count,

        supplier.supplier_name
        
        FROM log1_whs_inventory inventory
        LEFT JOIN log1_whs_category category ON
        inventory.category_id = category.category_id

        LEFT JOIN log1_whs_locations location ON
        location.location_id = category.location_id

        LEFT JOIN log1_whs_suppliers supplier ON
        supplier.supplier_id = inventory.supplier_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        if ($result)
            return $result[0];

        return false;
    }

}
