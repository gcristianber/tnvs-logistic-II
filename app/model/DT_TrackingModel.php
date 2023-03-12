<?php

class DT_TrackingModel
{

    use Model;

    protected $table = "log2_dt_tracking";
    protected $view_table = "log2_dt_tracking_view";

    // * Data fetch settings
    protected $limit         = 10;
    protected $offset         = 0;
    protected $order_type     = "desc";

    public function insertNew($tracking_id)
    {
        $data["tracking_id"] = $tracking_id;
        $data["status_id"] = 1;
        $data["remarks"] = null;

        $this->insert($data);
    }

    // ? Rendering view tables
    public function renderAll()
    {
        $query = "select * from $this->view_table";

        $query .= " order by tracking_id $this->order_type limit $this->limit offset $this->offset";

        return $this->query($query);
    }
    public function renderViewByCriteria($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->view_table where ";

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
    public function searchRow()
    {
    }

    public function countAll()
    {
        $query = "select count(*) as count from $this->view_table";
        return $this->query($query);
    }
    public function countByCriteria($data, $data_not = [])
    {

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select count(*) as count from $this->view_table where";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        return $this->query($query);
    }

    // ? Add a activity log
    public function addActivity($data)
    {
    }
}
