<?php

class ReservationReportModel
{

    use Model;

    protected $table = "log2_vr_reports";

    public function insert_report($data)
    {
        $prefix = "REPORT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["report_id"] = $prefix . $date . $random_str;

        $this->insert($data);

        print_r($data);
    }
}
