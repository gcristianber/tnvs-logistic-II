<?php

class ReservationReportModel
{

    use Model;

    protected $table = "log2_vr_reports";

    public function fetch_all_reports()
    {
        $query = 'SELECT reports.*,
        reservations.*,
        vehicle.*,
        status.report_status_name,
        user.display_name as requestor_name
        FROM log2_vr_reports reports
        LEFT JOIN log2_vr_reservations reservations ON
        reports.reservation_id = reservations.reservation_id
        LEFT JOIN log2_fm_vehicles vehicle ON
        reservations.vehicle_id = vehicle.vehicle_id
        LEFT JOIN admin_um_accounts user ON
        reservations.requestor_id = user.user_id
        LEFT JOIN log2_vr_report_status status ON
        reports.report_status_id = status.status_id
';

        return $this->query($query);
    }

    public function insert_report($data)
    {
        $prefix = "REPORT-";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5));

        $data["report_id"] = $prefix . $date . $random_str;

        $this->insert($data);

        print_r($data);
    }

    public function update_status($id, $status)
    {

        switch ($status) {
            case 'issued':
                $this->update($id, ["report_status_id" => 1], 'report_id');
                break;
            case 'in progress':
                $this->update($id, ["report_status_id" => 2], 'report_id');
                break;
            case 'solve':
                echo "Hello world";
                $this->update($id, ["report_status_id" => 3], 'report_id');
                break;
        }
    }
}
