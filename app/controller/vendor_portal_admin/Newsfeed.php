<?php

session_start();

class Newsfeed{

    use Controller;

    public function index(){

        $data = [];

        $VPFeedModel = new VPFeed;

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $formData = array($_POST, $_FILES["attachment"]);

            $form = $VPFeedModel->formData($formData);
            die;
        }

        $data["posts"] = $VPFeedModel->renderView();
        
        $this->view('vendor_portal/feed', $data);
    }

    public function manage_post($post_id = ''){
        $VPFeedModel = new VPFeed;

        $target_id = [
            "post_id" => $post_id
        ];


        $data["post"] = $VPFeedModel->searchViewByCriteria($target_id);

        $this->view('vendor_portal/manage', $data);
    }

}