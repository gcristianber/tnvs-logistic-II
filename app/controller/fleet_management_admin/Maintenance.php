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

    public function insert_new_maintenance(){
        $Maintenance = new MaintenanceModel;
        $Maintenance->insert_new_maintenance($_POST);
        // print_r($_POST);
        // return false;
    }

    public function get_all_maintenance(){
        $Maintenance = new MaintenanceModel;
        return $Maintenance->fetch_all_maintenance();
    }

    public function get_all_vehicles(){
        $Vehicles = new VehiclesModel;
        return $Vehicles->fetch_all_vehicles();
    }
    
    public function update_status()
    {
        $Maintenace = new MaintenanceModel;
        switch ($_POST["status"]) {
            case 'pending':
                $Maintenace->update_status($_POST["id"], 'pending');
                break;
            case 'in progress':
                $Maintenace->update_status($_POST["id"], 'in progress');
                break;
            case 'completed':
                $Maintenace->update_status($_POST["id"], 'completed');
                break;
        }
    }
}
