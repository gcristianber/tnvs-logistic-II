<?php

class DocumentsModel
{
    use Model;

    protected $table = 'log2_dt_documents';

    private $query = 'SELECT 
        documents.*,
        sender.department_name as sender_dept,
        receiver.department_name as receiver_dept,
        log2_dt_status.status_name,
        admin_um_accounts.display_name as author_name,
        admin_um_accounts.username as author_username
        FROM log2_dt_documents documents
        LEFT JOIN admin_um_departments sender ON documents.sent_by_dept_id = sender.department_id
        LEFT JOIN admin_um_departments receiver ON documents.send_to_dept_id = receiver.department_id
        LEFT JOIN log2_dt_status ON documents.status_id = log2_dt_status.tracking_status_id
        LEFT JOIN admin_um_accounts ON documents.author_id = admin_um_accounts.user_id';

    public function fetch_all_documents()
    {
        return $this->query($this->query);
    }

    public function fetch_document($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = $this->query . ' WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " LIMIT $this->limit OFFSET $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        return $result ? $result[0] : false;
    }

    public function update_status($id, $status)
    {
        $statusIdMap = [
            'incoming' => 1,
            'outgoing' => 2,
            'pending' => 3,
            'received' => 4,
            'reviewed' => 5,
            'declined' => 6
        ];

        if (isset($statusIdMap[$status])) {
            $this->update($id, ["status_id" => $statusIdMap[$status]], 'tracking_id');
        }
    }
}
