<?php



class UsersModel{

    use Model;

    protected $table = "admin_um_accounts";
    protected $view_table = 'admin_um_accounts_view';

    public function renderView(){
        
        $query = "select * from $this->view_table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

		return $this->query($query);
    }

    public function searchViewByCriteria($data, $data_not = []){
        
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

    public function renderViewByCriteria($data, $data_not = []){
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

		$query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

		$data = array_merge($data, $data_not);

		return $this->query($query, $data);
    }
}   