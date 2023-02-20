<?php


class Vendor_feed{

    use Controller;

    public function index(){

        $data = [];

        $VPFeedModel = new VPFeed;

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // print_r($_POST);
        }


        $data["posts"] = $VPFeedModel->renderView();
        
        $this->view('vendor_portal/vendor/feed', $data);
    }

}