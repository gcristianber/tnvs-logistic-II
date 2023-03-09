<?php

class AMAuditReports
{

    use Model;

    protected $table = "log2_am_audit_report";
    protected $view_table = "log2_am_audit_report_view";

    public function renderView(){
        
        $query = "select * from $this->view_table";

		return $this->query($query);
    }

    public function searchViewByCriteria($data, $data_not = []){
        
        $keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->table where ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		$data = array_merge($data, $data_not);
		
		$result = $this->query($query, $data);
		if($result)
			return $result[0];

		return false;
    }

    public function renderViewByCriteria($data, $data_not = []){
        $keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->table where ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		$data = array_merge($data, $data_not);

		return $this->query($query, $data);
    }

}
