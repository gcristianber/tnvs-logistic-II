<?php

class Documents
{

    use Model;

    protected $table = 'log2_dt_documents';

    public function fetch_document($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT 
        documents.tracking_id,
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

    public function fetch_all()
    {

        $query = 'SELECT 
        documents.tracking_id,
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
        documents.current_status_id = log2_dt_status.tracking_status_id';

        return $this->query($query);
    }

}
