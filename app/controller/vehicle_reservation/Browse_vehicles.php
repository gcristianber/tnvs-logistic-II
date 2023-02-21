<?php

class Browse_vehicles{

    use Controller;

    public function index(){

        $FLVehiclesModel = new FLVehicles;
        $data["all_vehicles"] = $FLVehiclesModel->renderView();
        $data["cars"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"cars"]);
        $data["trucks"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"trucks"]);
        $data["vans"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"vans"]);

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            print_r($_POST);
            die();
        }

        $this->view('vehicle_reservation/browse_vehicles', $data);
    }

}