<?php

class DTDocReqAccessModel{

    use Model;

    protected $table = "admin_doc_req_access";
    protected $view_table = "admin_doc_req_access_view";

    public function renderViewData(){

        $query = "select * from $this->view_table";

		return $this->query($query);
    }


    public function insertRequest($form){

        $data_insert = [
            "doc_req_access_id" => uniqid("docreq"),
            "document_id" => $form["target_id"],
            "requestor_id" => "sa12345",
            "reason_for_access" => $form["reason"],
            "date_requested"=>date("y-m-d h:i:s")
        ];

        $this->insert($data_insert);
    }

}