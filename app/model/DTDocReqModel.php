<?php

class DTDocReqModel{

    use Model;

    protected $table = "log2_dt_doc_req";


    public function insertData($form){
        $data = [
            "doc_req_id" => uniqid("docreq"),
            "category_id" => $form["document_type"],
            "employee_id" => $form["employee_id"],
            "employee_position_id" => $form["employee_position"],
            "email_address" => $form["email"],
            "reason_for_request" => $form["reason_for_request"],
            "date_created" => date("y-m-d h:i:s"),
            "due_date"=>date("y-m-d h:i:s"), //! NOTE: THIS IS TEMPORARY!
            "requestor_id"=> "sa12345", //! NOTE: THIS IS TEMPORARY!
        ];

        $this->insert($data);
    }
    
    public function checkForm($form){
        $this->errors = [];

        if(empty($form["reason_for_request"])){
            $this->errors["error"] = "Please provide a reason of request!";
        }

        if (empty($form["document_type"])) {
            $this->errors["error"] = "Please specify your request!";
        }
        
        if(empty($form["email"])){
            $this->errors["error"] = "Please provide your email address!";
        }

        if(empty($form["employee_position"])){
            $this->errors["error"] = "Please select a employee position!";
        }

        if(empty($form["employee_id"])){
            $this->errors["error"] = "Please input employee id!";
        }

        if(empty($form["name"])){
            
            $this->errors["error"] = "Please input name!";
        }

        if(empty($this->errors)){
            return true;
        }

        return false;
    }


}