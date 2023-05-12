<?php

class InventoryModel
{

    use Model;

    protected $table = "log1_whs_inventory";

    public function fetch_all_products()
    {
        $query = 'SELECT product.*,
        product_location.location_name,
        location_category.category_name,
        location_status.location_status_name
        FROM log1_whs_inventory product
        LEFT JOIN log1_whs_locations product_location ON
        product.location_id = product_location.location_id
        LEFT JOIN log1_whs_category location_category ON
        product_location.product_category_id = location_category.category_id
        LEFT JOIN log1_whs_location_status location_status ON
        product_location.location_status_id = location_status.status_id';

        return $this->query($query);
    }

}
