<?php

session_start();

class Reservation_reports
{

    use Controller;

    public function index()
    {
        $data = [];

        $Reports = new ReservationReportModel;
        $data["reports"] = $Reports->fetch_all_reports();


        $this->view('partials/navbar');
        $this->view("vehicle_reservation/reservation_reports", $data);
        $this->view("partials/sidebar");
    }

    public function insert_report(){
        
    }

    public function update_status()
    {
        $Reports = new ReservationReportModel;
        switch ($_POST["status"]) {
            case 'issued':
                $Reports->update_status($_POST["id"], 'issued');
                break;
            case 'in progress':
                $Reports->update_status($_POST["id"], 'in progress');
                break;
            case 'solve':
                $Reports->update_status($_POST["id"], 'solve');
                break;
        }
    }
}
