<?php

class DeliveryModel
{

    use Model;

    protected $table = 'log2_fm_delivery';


    public function fetch_all_delivery()
    {
        $query = 'SELECT delivery.*,
        driver.*,
        vehicle.*,
        delivery_type.delivery_type_name
        FROM log2_fm_delivery delivery
        LEFT JOIN log2_fm_delivery_type delivery_type ON
        delivery.delivery_type_id = delivery_type.delivery_type_id
        LEFT JOIN log2_fm_drivers driver ON
        delivery.driver_id = driver.driver_id
        LEFT JOIN log2_fm_vehicles vehicle ON
        delivery.vehicle_id = vehicle.vehicle_id
        ';

        return $this->query($query);
    }

    public function insert_new_delivery($data)
    {
        $prefix = "FM-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));
        $data["tracking_id"] = $prefix . $date . $random_str;

        $this->insert($data);

        return $data["tracking_id"];
        
    }
}
