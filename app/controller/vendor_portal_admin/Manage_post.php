<?php

class Manage_post
{

    use Controller;

    public function index()
    {

        $pr_id = $_GET["pr_id"];

        $PurchaseRequests = new VPPurchaseRequests;
        $Vendors = new VPVendors;
        $InviteVendors = new VPInviteVendors;

        $data["purchase_request"] = $PurchaseRequests->searchByCriteria(["pr_id" => $pr_id]);
        $data["verified_vendors"] = $Vendors->renderViewByCriteria(["is_account_verified" => 1]);


        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            if (isset($_POST["invite"])) {

                $vendor_ids = $_POST['invite'];

                foreach ($vendor_ids as $vendor_id) {
                    $invite = [
                        "purchase_request_id" => $_POST['pr_id'],
                        "vendor_invite_id" => uniqid(),
                        "vendor_id" => $vendor_id
                    ];
                    $InviteVendors->insert($invite);
                  }

            }

            exit();
        }


        $this->view('partials/navbar');
        $this->view("vendor_portal/admin/manage_post", $data);
        $this->view('partials/sidebar');
    }
}
