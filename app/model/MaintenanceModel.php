<?php 

class MaintenanceModel{

    use Model;

    protected $table = 'log2_fm_maintenance';

    public function insert_new_maintenance($data)
    {
        $prefix = "MNT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["maintenance_id"] = $prefix . $date . $random_str;
        
        $this->insert($data);

        print_r($data);

    }

    public function fetch_all_maintenance()
    {
        $query = 'SELECT
        maintenance.maintenance_id,
        /* vehicle data */
        vehicle.vehicle_id,
        vehicle.make,
        vehicle.plate,
        /* maintenance type */
        maintenance_type.maintenance_type,
        /* status */
        maintenance_status.maintenance_status,
        maintenance.mechanic_name,
        maintenance.date_schedule,
        maintenance.remarks
        
        FROM log2_fm_maintenance maintenance
        LEFT JOIN log2_fm_vehicles vehicle ON
        maintenance.vehicle_id = vehicle.vehicle_id
        LEFT JOIN log2_fm_maintenance_type maintenance_type ON
        maintenance.type_id = maintenance_type.maintenance_type_id
        LEFT JOIN log2_fm_maintenance_status maintenance_status ON
        maintenance.status_id = maintenance_status.maintenance_status_id';

        return $this->query($query);
    }

}