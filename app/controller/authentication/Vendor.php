<?php

session_start();

class Vendor
{

    use Controller;

    public function index()
    {

        $data = [];

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arr["email_address"] = $_POST["email_address"];

                $Vendors = new VendorsModel;
                $row = $Vendors->fetch_vendor($arr);

                if ($row) {
                    $_SESSION["user"] = $row;
                    $Vendors->send_otp($row);
                    redirect("authentication/vendor/otp_vendor");
                }
            }
        }

        $this->view("auth/login_vendor", $data);
    }

    public function otp_vendor()
    {

        $data = [];
        print_r($_SESSION);

        if (!empty($_POST)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $arr["vendor_id"] = $_SESSION["user"]->vendor_id;
                $otpArray = $_POST['otp']; // Assuming the array is obtained from the $_POST variable
                $otpString = implode('', $otpArray); // Merge array elements into a single string

                $Vendors = new VendorsModel;
                $row = $Vendors->fetch_vendor($arr);

                print_r($row);

                if($row && $row->otp == $otpString){
                    redirect("general/dashboard");
                    exit;
                }

            }
        }

        $this->view("auth/otp_vendor", $data);
    }
}
