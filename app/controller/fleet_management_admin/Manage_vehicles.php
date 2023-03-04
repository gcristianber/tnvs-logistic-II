<?php

class Manage_vehicles{

    use Controller;

    public function index(){

        $FMVehicles = new FMVehicles;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $check = $FMVehicles->checkForm($_POST, $_FILES);

            if (!$check) {
                $error_alert = implode(",", $FMVehicles->errors);
                echo $error_alert;
            } else {
                header('Content-Type: application/json');
                echo json_encode(["success" => true]);
            }

            exit();
        }


        $data["vehicles"] = $FMVehicles->renderViewData();
        

        $this->view("fleet_management/admin/manage_vehicles", $data);
        $this->view("partials/sidebar");
    }


}