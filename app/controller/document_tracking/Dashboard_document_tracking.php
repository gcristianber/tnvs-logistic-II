<?php



session_start();


class Dashboard_document_tracking
{

    use Controller;

    public $errors = [];

    public function index()
    {

        $data = [];
        $documentTrackerModel = new DocumentTrackerModel;
        $trackerFeedbackModel = new TrackerFeedbackModel;
        $arr = ["category_dept_name" => $_SESSION["user"]->department_name];
        $data["tracker_status"] = $trackerFeedbackModel->renderView();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            
            if(isset($_POST["getStatus"])){
                echo json_encode($documentTrackerModel->getStatusCount($arr));

                $documentTrackerModel->getStatusCount($arr);
                die();
            }
            
            // die();

            $documentTrackerModel->actionRequest($_POST);
        }
        
        $data["received"] = $documentTrackerModel->renderViewByCriteria($arr);

        $this->view("document_tracking/dashboard", $data);
    }


}
