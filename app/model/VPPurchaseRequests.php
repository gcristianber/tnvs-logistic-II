<?php 

class VPPurchaseRequests{

    use Model;

    protected $table = "log2_vp_pr";
    protected $view_table = "log2_vp_pr_view";

    public function renderView(){
        
        $query = "select * from $this->view_table";

		return $this->query($query);
    }

    public function searchByCriteria($data, $data_not = [])
	{
		$keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->view_table where ";

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

}