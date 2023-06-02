<?php

class TrackDocumentModel
{
    use Model;

    protected $table = 'log2_dt_track';

    private $query = 'SELECT track.*,
    user.display_name,
    user.username,
    user_roles.role_name,
    tracking_status.status_name,
    department.department_name
    FROM log2_dt_track track 
    LEFT JOIN log2_dt_status tracking_status ON track.status_id = tracking_status.tracking_status_id
    LEFT JOIN admin_um_accounts user ON track.action_by_id = user.user_id
    LEFT JOIN admin_um_roles user_roles ON user.role_id = user_roles.role_id
    LEFT JOIN admin_um_departments department ON user.department_id = department.department_id ';

    public function get_all_tracks($data, $data_not = [])
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

        return $result ? $this->query($query, $data) : false;
    }
}
