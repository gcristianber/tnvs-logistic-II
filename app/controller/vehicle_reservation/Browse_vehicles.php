<?php

class Browse_vehicles{

    use Controller;

    public function index(){

        $FLVehiclesModel = new FLVehicles;
        $data["all_vehicles"] = $FLVehiclesModel->renderView();
        $data["cars"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"cars"]);
        $data["trucks"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"trucks"]);
        $data["vans"] = $FLVehiclesModel->renderViewByCriteria(["vehicle_category_name"=>"vans"]);

        $this->view('vehicle_reservation/browse_vehicles', $data);
    }

}