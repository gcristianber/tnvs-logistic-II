<?php

session_start();

class Inventory{

    use Controller;

    public function index(){
        $data = [];
        $Inventory = new InventoryModel;
        $Locations = new InventoryLocationModel;
        $data["products"] = $Inventory->fetch_all_products();
        $data["locations"] = $Locations->fetch_all_locations();

        $this->view('partials/navbar');
        $this->view("audit_management/inventory",$data);
        $this->view('partials/sidebar');
    }
    
    public function insert_report(){
        $LineItems = new LineItemsModel;
        $LineItems->insert_line_items($_POST);

        // print_r($_POST);
    }

    public function fetch_all_products(){
        $Inventory = new InventoryModel;
        return $Inventory->fetch_all_products();
    }

    public function products(){
        $data = [];
        $this->view('partials/navbar');
        $this->view("audit_management/products",$data);
        $this->view('partials/sidebar');
    }



}