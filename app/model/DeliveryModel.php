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
        delivery_type.delivery_type_name,
        status.delivery_status_name
        FROM log2_fm_delivery delivery
        LEFT JOIN log2_fm_delivery_type delivery_type ON
        delivery.delivery_type_id = delivery_type.delivery_type_id
        LEFT JOIN log2_fm_drivers driver ON
        delivery.driver_id = driver.driver_id
        LEFT JOIN log2_fm_vehicles vehicle ON
        delivery.vehicle_id = vehicle.vehicle_id
        LEFT JOIN log2_fm_delivery_status status ON
        delivery.status_id = status.status_id
        ';

        return $this->query($query);
    }

    public function fetch_delivery($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
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
        delivery.vehicle_id = vehicle.vehicle_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);
        if ($result)
            return $result[0];

        return false;
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

    public function update_status($id, $status)
    {

        switch ($status) {
            case 'pending':
                $this->update($id, ["status_id" => 1], 'tracking_id');
                break;
            case 'preparing':
                $this->update($id, ["status_id" => 2], 'tracking_id');
                break;
            case 'in transit':
                $this->update($id, ["status_id" => 3], 'tracking_id');
                break;
            case 'delivered':
                $this->update($id, ["status_id" => 4], 'tracking_id');
                break;
        }
    }
}
