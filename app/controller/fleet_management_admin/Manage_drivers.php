<?php

class Manage_drivers{

    use Controller;


    public function index(){

        $FMDrivers = new FMDrivers;

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $check = $FMDrivers->checkForm($_POST, $_FILES);

            // print_r($_POST);
            // if($check){
            //     echo "Success";
            // }
            exit();
        }

        $data["drivers"] = $FMDrivers->renderViewData();

        $this->view('partials/navbar');
        $this->view("fleet_management/admin/manage_drivers", $data);
        $this->view("partials/sidebar");
        
    }

}