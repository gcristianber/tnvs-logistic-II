<?php

session_start();

class Track_documents
{

    use Controller;

    public function index()
    {

        $data["documents"] = $this->get_all_documents();

        $this->view('partials/navbar');
        $this->view("document_tracking/track_documents", $data);
        $this->view('partials/sidebar');
    }

    public function track($tracking_id = ''){
        $Track = new DT_Track;
        $data["track"] = $Track->renderViewByCriteria(["tracking_id"=>$tracking_id]);

        $this->view('partials/navbar');
        $this->view("document_tracking/document_log", $data);
        $this->view('partials/sidebar');
    }

    public function get_all_documents()
    {
        $Documents = new DT_Documents;
        return $Documents->renderView();
    }

    public function get_document($tracking_id = '')
    {
        $Documents = new DT_Documents;
        return $Documents->findRowView(["tracking_id" => $tracking_id]);
    }

    public function update_status($tracking_id = '')
    {
        $Documents = new DT_Documents;
        $Track = new DT_Track;

        $user_dept = $_SESSION["user"]->user_department;
        $target_dept = $_POST["target_dept"];
        $status_type = $_POST["status_type"];

        switch ($status_type) {
            case 'sent':
                $sent_status_val = 2;
                // ?Update the status in the main table.
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                // ?Insert a tracking data tracking table.
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'received':
                $sent_status_val = 3;
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'forwarded':
                $sent_status_val = 4;
                $Documents->update($tracking_id, ["send_to_dept_id" => $target_dept], "tracking_id");
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'on hold':
                $sent_status_val = 5;
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'reviewed':
                $sent_status_val = 6;
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'completed':
                $sent_status_val = 7;
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
            case 'archived':
                $sent_status_val = 8;
                $Documents->update($tracking_id, ["current_status_id" => $sent_status_val], "tracking_id");
                $Track->insert(
                    [
                        "tracking_id" => $tracking_id,
                        "action_by_dept_id" => $user_dept,
                        "status" => $sent_status_val
                    ]
                );
                break;
        }


        return false;
    }
}
