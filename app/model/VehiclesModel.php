<?php

class VehiclesModel
{

    use Model;

    protected $table = 'log2_fm_vehicles';

    public function insert_vehicle($data, $file)
    {
        $prefix = "FM-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5)); // generate a random string of 5 characters

        $data["vehicle_id"] = $prefix . $date . $random_str;
        $data["thumbnail_path"] = $_FILES["thumbnail"]["name"];

        // TODO: Insert the file to the directory
        $upload_dir = "uploads/images/thumbnails/";
        $file_name = $file["thumbnail"]["name"];
        $file_temp = $file["thumbnail"]["tmp_name"];

        move_uploaded_file($file_temp, $upload_dir . $file_name);
        $this->insert($data);
    }

    

    public function fetch_all_vehicles()
    {
        $query = 'SELECT
        log2_fm_vehicles.vehicle_id,
        log2_fm_vehicles.make,
        log2_fm_vehicles.plate,
        log2_fm_vehicles.description,
        log2_fm_vehicles.number_of_seats,
        log2_fm_vehicles.odometer,
        log2_fm_vehicles.dimensions,
        log2_fm_vehicles.thumbnail_path,
        
        log2_fm_vehicle_types.type_name as vehicle_type,
        log2_fm_trans_types.type_name as trans_type,
        log2_fm_vehicle_status.status_name as status_name
        
        FROM log2_fm_vehicles
        
        LEFT JOIN log2_fm_vehicle_types ON
        log2_fm_vehicles.vehicle_type_id = log2_fm_vehicle_types.vehicle_type_id
        LEFT JOIN log2_fm_trans_types ON
        log2_fm_vehicles.trans_type_id = log2_fm_trans_types.trans_type_id
        LEFT JOIN log2_fm_vehicle_status ON
        log2_fm_vehicles.status_id = log2_fm_vehicle_status.status_id';

        return $this->query($query);
    }


}
