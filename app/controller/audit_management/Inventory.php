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


        $AuditReport = new AuditReportModel;
        $_POST["report_id"] = $AuditReport->insert_report($_POST);

        $LineItems = new LineItemsModel;
        $LineItems->insert_line_items($_POST);

        $Attachment = new AuditAttachmentModel;
        $Attachment->insert_attachment($_POST["report_id"] ,$_FILES);

        if($_POST["report_id"]){
            $Location = new LocationsModel;
            $data = $Location->where(["location_id" => $_POST["location_id"]]);
            $frequency_count = $data[0]->frequency_count;
            $Location->update_next_count($_POST["location_id"], $frequency_count);
        }
        print_r($_POST);

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