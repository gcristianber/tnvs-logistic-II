<?php

session_start();

class Verify_otp{
    use Controller;

    public function index(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $otp_inputted = $_POST["otp_code"];

            $VPVendors = new VPVendors;
            $arr["email_address"] = $_SESSION["user"]->email_address;
            $row = $VPVendors->searchViewByCriteria($arr);

            if($row){
                if($row->otp == $otp_inputted){
                    //! TODO: Redirect to vendor dashboard
                    redirect("vendor_portal_vendor/test");
                }
            }



        }

        $this->view("vendor_portal/vendor/verify_otp");
    }


}