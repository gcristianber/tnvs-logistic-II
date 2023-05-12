<?php

class LocationsModel
{

    use Model;

    protected $table = "log1_whs_locations";

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

    public function update_next_count($location_id, $frequency)
    {
        $dateTime = new DateTime();
        switch ($frequency) {
            case "weekly":
                $interval = new DateInterval('P1W');
                break;
            case "monthly":
                $interval = new DateInterval('P1M');
                break;
            case "quarterly":
                $interval = new DateInterval('P3M');
                break;
            case "annually":
                $interval = new DateInterval('P1Y');
                break;
            default:
                return false;
        }
        $dateTime->add($interval);
        $next_count_date = $dateTime->format('Y-m-d');

        $this->update($location_id, [
            "next_count_date"=>$next_count_date,
            "last_audit_date"=> date("Y-m-d h:i:s"),
            "location_status_id"=>1
        ], 'location_id');
    }
}
