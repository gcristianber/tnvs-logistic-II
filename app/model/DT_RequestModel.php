<?php

class DT_RequestModel
{

    use Model;

    protected $table = "log2_dt_request";
    protected $view_table = "log2_dt_request_view";

    // * Data fetch settings
    protected $limit         = 10;
    protected $offset         = 0;
    protected $order_type     = "desc";

    // ? Checking and sending document.
    public function check($data)
    {
        return true;
    }
    public function send($data)
    {
        $data["tracking_id"] = rand(1000000000, 99999999999);
        $data["requestor_id"] = "sa12345";
        $this->insert($data);

        return $data["tracking_id"];
    }

    // ? Rendering view tables
    public function renderAll()
    {
        $query = "select * from $this->view_table";

        $query .= " order by tracking_id $this->order_type";

		return $this->query($query);
    }
    public function renderByCriteria(){}
    public function searchRow(){}

    public function countAll(){
        $query = "select count(*) as count from $this->view_table";
		return $this->query($query);
    }
    public function countByCriteria($data, $data_not = []){

        $keys = array_keys($data);
		$keys_not = array_keys($data_not);
        $query = "select count(*) as count from $this->view_table where";

        foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		return $this->query($query);
    }

    // ? Add a activity log
    public function addActivity($data){}
}
