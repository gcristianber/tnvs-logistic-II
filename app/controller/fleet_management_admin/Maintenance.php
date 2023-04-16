<?php

session_start();

class Maintenance
{

    use Controller;

    public function index()
    {

        $data["maintenance"] = $this->get_all_maintenance();
        $data["vehicles"] = $this->get_all_vehicles();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/maintenance", $data);
        $this->view("partials/sidebar");
    }

    public function add_new()
    {
        $Maintenance = new FM_Maintenance;
        $_POST["maintenance_id"] = uniqid("MNT-", true);
        $Maintenance->insert($_POST);

        return false;
    }

    public function update_status()
    {
        $Maintenance = new FM_Maintenance;
        $maintenance_id = $_POST["maintenance_id"];

        $status_name = $_POST["status_name"];
        switch ($status_name) {
            default:
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 1], "maintenance_id");
                break;
            case 'in progress':
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 2], "maintenance_id");
                break;
            case 'scheduled':
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 3], "maintenance_id");
                break;
            case 'delayed':
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 4], "maintenance_id");
                break;
            case 'completed':
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 5], "maintenance_id");
                break;
            case 'cancelled':
                $Maintenance->update($maintenance_id, ["maintenance_status_id" => 6], "maintenance_id");
                break;
        }

        return false;
    }

    public function get_all_maintenance()
    {
        $Maintenance = new FM_Maintenance;
        return $Maintenance->renderView();
    }

    public function get_maintenance()
    {
        $Maintenance = new FM_Maintenance;
        $maintenance_id = $_POST["maintenance_id"];
        return $Maintenance->findRowView(["maintenance_id" => $maintenance_id]);
    }

    public function get_all_vehicles()
    {
        $Vehicles = new FM_Vehicles;
        return $Vehicles->renderView();
    }

    public function get_vehicle()
    {
        $Vehicle = new FM_Vehicles;
        $vehicle_id = $_POST["vehicle_id"];
        return $Vehicle->findRowView(["vehicle_id" => $vehicle_id]);
    }

}
