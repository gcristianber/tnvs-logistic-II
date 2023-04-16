<?php

use Dompdf\Dompdf;

session_start();

class Audit_requests
{

    use Controller;

    public function index()
    {
        $data = [];

        $data["requests"] = $this->getAllRequests();

        $this->view('partials/navbar');
        $this->view("audit_management/audit_requests", $data);
        $this->view("partials/sidebar");
    }

    public function create()
    {
        $data = [];
        $Reports = new AM_Reports;
        $Audited_items = new AM_Audited_items;
        $Requests = new AM_Requests;
        $Inventory = new WHS_Inventory;

        $reference_number = $_GET["reference_number"];

        $data["request"] = $this->getRowRequest($reference_number);
        $data["products"] = $Inventory->renderViewByCriteria(["category_name" => $data["request"]->category_name]);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            print_r($_POST);
            $report_body = $_POST["report"];
            $table_data = $_POST["table_data"];
            $overall_accuracy = $_POST["overall_accuracy"];
            $Reports->insertReport($reference_number, $report_body, $overall_accuracy);
            $Requests->update($reference_number, ["status_id" => 2], "reference_number");
            // Check if $table_data is an array
            if (is_array($table_data)) {
                foreach ($table_data as $key => $audited_item) {
                    // Add reference_number to each audited item
                    $audited_item["reference_number"] = $reference_number;
                    $Audited_items->insert($audited_item);
                }
            }

            
            exit;
        }


        $this->view("audit_management/create_report", $data);
        $this->view('partials/navbar');
        $this->view('partials/sidebar');
    }

    public function generateReport()
    {
    }

    public function view_report()
    {

        $data = [];
        $reference_number = $_GET["reference_number"];
        $Reports = new AM_Reports;
        $Items = new AM_Audited_items;
        $data["report"] = $Reports->first(["reference_number" => $reference_number]);
        $data["table_report"] = $Items->where(["reference_number" => $reference_number]);

        $this->view('partials/navbar');
        $this->view("audit_management/view_report", $data);
        $this->view("partials/sidebar");
    }

    public function download_as_file()
    {
        $data = [];
        $reference_number = $_GET["reference_number"];
        $Reports = new AM_Reports;
        $Items = new AM_Audited_items;
        $data["report"] = $Reports->first(["reference_number" => $reference_number]);
        $data["table_report"] = $Items->where(["reference_number" => $reference_number]);


        $dompdf = new Dompdf();
        ob_start();
        $html = $this->view("audit_management/template/report_template", $data);
        $html = ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hello.pdf", array("Attachment" => 0));
    }

    public function update_status()
    {
        $Requests = new AM_Requests;
        $reference_number = $_POST["reference_number"];
        $status_type = $_POST["status_type"];

        switch ($status_type) {
            case 'receive':
                $Requests->update($reference_number, ["status_id" => 2], "reference_number");
                break;
            case 'completed':
                $Requests->update($reference_number, ["status_id" => 3], "reference_number");
                break;
            case 'decline':
                $Requests->update(
                    $reference_number,
                    [
                        "status_id" => 4,
                        "decline_remarks" => $_POST["remarks"],
                        "remark_type" => $_POST["remark_type"]
                    ],
                    "reference_number"
                );
                break;
            default:
                echo "Status error!";
                break;
        }
    }

    public function fetch_by_category($category_id = '')
    {
        $data = [];
        $Inventory = new WHS_Inventory;

        echo json_encode($Inventory->where(["category_id" => $category_id]));
    }

    public function fetch_all_category()
    {
        $data = [];
        $Inventory = new WHS_Inventory;

        echo json_encode($Inventory->findAll());
    }

    public function getAllRequests()
    {
        $Requests = new AM_Requests;
        return $Requests->renderView();
    }

    public function getRowRequest($reference_number = '')
    {
        $Requests = new AM_Requests;
        return $Requests->findRowView(["reference_number" => $reference_number]);
    }
}
