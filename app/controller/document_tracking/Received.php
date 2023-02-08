<?php
session_start();

class Received{

    use Controller;

    public function index(){

        $data = [];

        $documentAccessModel = new DocumentAccessModel;
        $arr = [
            "folder_name"=>$_SESSION["user"]->department_name,
            // "request_status_name"=> "pending"
        ];

        $not = [
            "request_status_name"=>"granted"
        ];
        
        $data["received_requests"] = $documentAccessModel->renderViewByCriteria($arr, $not);
        // print_r($data["received_requests"]);

        if(isset($_GET["is_endorsed"])){
            if($_GET["is_endorsed"]){

                $today = new DateTime();
                $interval = new DateInterval('P1D');
                $range = new DatePeriod($today, $interval, 7);
                $dates = iterator_to_array($range);


                $target_id = [
                    "control_number" => $_GET["id"]
                ];

                $change = [
                    "request_status_id" => 2,
                    "start_date" =>$dates[0]->format('Y-m-d h:i:s A'),
                    "end_date" =>end($dates)->format('Y-m-d h:i:s A'),
                    "endorser_id"=>$_SESSION["user"]->user_id
                ];

                

                

                // echo "First date: " . $dates[0]->format('Y-m-d h:i:s A'), PHP_EOL;
                // echo "Last date: " . end($dates)->format('Y-m-d h:i:s A'), PHP_EOL;
            
                
                $documentAccessModel->update($_GET["id"],$change,'control_number');
            }
        }

        $this->view("document_tracking/received", $data);
    }


    

}