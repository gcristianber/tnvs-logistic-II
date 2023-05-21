<?php

class TransferReportsModel
{

    use Model;

    protected $table = 'log2_am_transfer_reports';

    public function fetch_all_reports(){
        $query = 'SELECT log2_am_transfer_reports.*,
        admin_um_accounts.display_name as author_name,
        admin_um_accounts.username as author_username,
        log1_whs_transfers.subject,
        log1_whs_transfer_types.transfer_type_name,
        log1_whs_locations.location_name,
        log2_am_report_status.report_status_name
        FROM log2_am_transfer_reports
        LEFT JOIN admin_um_accounts ON
        log2_am_transfer_reports.author_id = admin_um_accounts.user_id
        LEFT JOIN log1_whs_transfers ON
        log2_am_transfer_reports.transfer_id = log1_whs_transfers.transfer_id
        LEFT JOIN log1_whs_transfer_types ON
        log1_whs_transfers.transfer_type_id = log1_whs_transfer_types.type_id
        LEFT JOIN log1_whs_locations ON
        log1_whs_transfers.location_id = log1_whs_locations.location_id
        LEFT JOIN log2_am_report_status ON
        log2_am_transfer_reports.status_id = log2_am_report_status.status_id';

        return $this->query($query);
    }

    public function fetch_report($data, $data_not=[]){
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT log2_am_transfer_reports.*,
        admin_um_accounts.display_name as author_name,
        admin_um_accounts.username as author_username,
        log1_whs_transfers.subject,
        log1_whs_transfer_types.transfer_type_name,
        log1_whs_locations.location_name,
        log2_am_report_status.report_status_name
        FROM log2_am_transfer_reports
        LEFT JOIN admin_um_accounts ON
        log2_am_transfer_reports.author_id = admin_um_accounts.user_id
        LEFT JOIN log1_whs_transfers ON
        log2_am_transfer_reports.transfer_id = log1_whs_transfers.transfer_id
        LEFT JOIN log1_whs_transfer_types ON
        log1_whs_transfers.transfer_type_id = log1_whs_transfer_types.type_id
        LEFT JOIN log1_whs_locations ON
        log1_whs_transfers.location_id = log1_whs_locations.location_id
        LEFT JOIN log2_am_report_status ON
        log2_am_transfer_reports.status_id = log2_am_report_status.status_id WHERE ';

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);
        if ($result)
            return $result[0];

        return false;
    }

    public function insert_report($data)
    {
        $prefix = "AUDIT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));
        $data["report_id"] = $prefix . $date . $random_str;
        $data["author_id"] = $_SESSION["user"]->user_id;

        $this->insert($data);

        return $data["report_id"];
    }
}
