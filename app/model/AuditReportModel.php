<?php

class AuditReportModel
{

    use Model;

    protected $table = 'log2_am_reports';

    public function fetch_all_reports(){
        $query = 'SELECT reports.*,
        locations.location_name,
        locations.abc,
        locations.frequency_count,
        locations.frequency_count,
        category.category_name
        FROM log2_am_reports reports
        LEFT JOIN log1_whs_locations locations ON
        reports.location_id = locations.location_id
        LEFT JOIN log1_whs_category category ON
        locations.product_category_id = category.category_id
        ';

        return $this->query($query);
    }

    public function fetch_report($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT reports.*,
        locations.location_name,
        locations.abc,
        locations.frequency_count,
        locations.frequency_count,
        category.category_name
        FROM log2_am_reports reports
        LEFT JOIN log1_whs_locations locations ON
        reports.location_id = locations.location_id
        LEFT JOIN log1_whs_category category ON
        locations.product_category_id = category.category_id
        WHERE ';

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

    public function insert_report($data){
        $prefix = "AUDIT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));
        $data["report_id"] = $prefix . $date . $random_str;
        $data["author_id"] = $_SESSION["user"]->user_id;

        unset($data["line_items"]);

        $this->insert($data);
        
        return $data["report_id"];

    }

    
}
