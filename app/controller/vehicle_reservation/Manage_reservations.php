<?php

session_start();

class Manage_reservations
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["reservations"] = $this->fetch_all_reservations();

        $this->view('partials/navbar');
        $this->view("vehicle_reservation/manage_reservations", $data);
        $this->view("partials/sidebar");
    }

    public function fetch_all_reservations()
    {
        $Reservations = new ReservationsModel;
        return $Reservations->fetch_all_reservations();
    }

    public function update_status()
    {
        $Reservations = new ReservationsModel;
        switch ($_POST["status"]) {
            case 'pending':
                $Reservations->update_status($_POST["id"], 'pending');
                print_r("pending");
                break;
            case 'approve':
                $Reservations->update_status($_POST["id"], 'approve');
                print_r("Approve");
                break;
            case 'dispatch':
                $Reservations->update_status($_POST["id"], 'dispatch');
                print_r("dispatch");
                break;
            case 'return':
                $Reservations->update_status($_POST["id"], 'return');
                print_r("return");
                break;
            case 'decline':
                $Reservations->update_status($_POST["id"], 'decline');
                print_r("decline");
                break;
            case 'cancel':
                $Reservations->update_status($_POST["id"], 'cancel');
                print_r("cancel");
                break;
            default:
                # code...
                break;
        }
    }

    public function insert_maintenance()
    {
        $MaintenanceModel = new MaintenanceModel;
        $MaintenanceModel->insert_new_maintenance($_POST);

        print_r($_POST);
        print_r($_FILES);
    }

    public function insert_report()
    {
        $ReservationReport = new ReservationReportModel;
        $ReservationReport->insert_report($_POST);
    }
}
