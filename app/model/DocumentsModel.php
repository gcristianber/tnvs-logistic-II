<?php

class DocumentsModel
{

    use Model;

    protected $table = 'log2_dt_documents';

    public function fetch_all_documents()
    {
        $query = 'SELECT 
        documents.*,

        sender.department_name as sender_dept,
        receiver.department_name as receiver_dept,
        log2_dt_status.status_name
        
        FROM log2_dt_documents documents
        LEFT JOIN admin_um_departments sender ON
        documents.sent_by_dept_id = sender.department_id
        LEFT JOIN admin_um_departments receiver ON
        documents.send_to_dept_id = receiver.department_id
        LEFT JOIN log2_dt_status ON
        documents.status_id = log2_dt_status.tracking_status_id';

        return $this->query($query);
    }

    public function fetch_document($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        documents.tracking_id,
        documents.subject,
        documents.sent_date,
        documents.remarks,

        sender.department_name as sender_dept,
        receiver.department_name as receiver_dept,
        log2_dt_status.status_name as current_status
        
        FROM log2_dt_documents documents
        LEFT JOIN admin_um_departments sender ON
        documents.sent_by_dept_id = sender.department_id
        LEFT JOIN admin_um_departments receiver ON
        documents.send_to_dept_id = receiver.department_id
        LEFT JOIN log2_dt_status ON
        documents.current_status_id = log2_dt_status.tracking_status_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        if ($result)
            return $result[0];

        return false;
    }

    public function update_status($id, $status)
    {

        switch ($status) {
            case 'incoming':
                $this->update($id, ["status_id" => 1], 'tracking_id');
                break;
            case 'outgoing':
                $this->update($id, ["status_id" => 2], 'tracking_id');
                break;
            case 'pending':
                $this->update($id, ["status_id" => 3], 'tracking_id');
                break;
            case 'received':
                $this->update($id, ["status_id" => 4], 'tracking_id');
                break;
            case 'reviewed':
                $this->update($id, ["status_id" => 5], 'tracking_id');
                break;
            case 'declined':
                $this->update($id, ["status_id" => 6], 'tracking_id');
                break;
        }
    }



    public function get_all_tracks($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        track.tracking_id,
        track.action_date,
        track.remarks,
        track.user_agent,
        track.ip_address,
        user.display_name,
        user_roles.role_name,

        tracking_status.status_name
        FROM log2_dt_track track 
        -- Tracking status
        LEFT JOIN log2_dt_status tracking_status ON
        track.status_id = tracking_status.tracking_status_id
        -- Users
        LEFT JOIN admin_um_accounts user ON
        track.action_by_id = user.user_id
        LEFT JOIN admin_um_roles user_roles ON
        user.role_id = user_roles.role_id
        
        WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }
}
