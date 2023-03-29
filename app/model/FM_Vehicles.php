<?php

class FM_Vehicles
{

    use Model;

    protected $table = "log2_fm_vehicles";
    protected $view_table = "log2_fm_vehicles_view";

    public function insert_vehicle($data, $thumbnail)
    {
        $prefix = "FM";
        $date = date("ymd");
        $random_str = strtoupper(substr(str_shuffle(md5(microtime())), 0, 5)); // generate a random string of 5 characters
        
        $data["vehicle_id"] = $prefix . $date . $random_str;
        $data["thumbnail_path"] = $thumbnail["thumbnail"]["name"];

        // TODO: Insert the file to the directory
        $upload_dir = "uploads/images/thumbnails/";
        $file_name = $thumbnail["thumbnail"]["name"];
        $file_temp = $thumbnail["thumbnail"]["tmp_name"];

        move_uploaded_file($file_temp, $upload_dir . $file_name);
        $this->insert($data);
    }


    public function renderView()
	{ 
		$query = "select * from $this->view_table";

		return $this->query($query);
	}

    public function renderViewByCriteria($data, $data_not = [])
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

		return $this->query($query, $data);
	}

    public function findRowView($data, $data_not = [])
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

    public function countAllView()
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

