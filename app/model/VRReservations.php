<?php

class VRReservations{

    use Model;

    protected $table = "vr_reservations";
    protected $view_table = 'vr_reservations_view';

    public function renderView(){
        
        $query = "select * from $this->view_table";

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

		$data = array_merge($data, $data_not);

		return $this->query($query, $data);
    }

	public function formData($data){

		date_default_timezone_set('Asia/Hong_Kong');

		$post_id = uniqid(date("dmyis"));
		$file_name = $data[1]["name"];
		$file_size = $data[1]["size"];
		$file_temp = $data[1]["tmp_name"];
		$file_error = $data[1]["error"];

		if($file_error === 0){
			
			if($file_size > 100000){
				$this->errors["file_error"] = 'File is too large';
			}else{
				$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$allowed_ext = array("docx", "pptx", "xslx", "jpeg", "jpg", "png");

				if(in_array($file_ext, $allowed_ext)){
					$folder_id 	= $post_id;
					$new_path 	= "uploads/vendor_portal/attachments/".$folder_id."/";

					mkdir($new_path);

					$file_path = $new_path.$file_name;
					move_uploaded_file($file_temp, $file_path);
				}
			}
		}

		$date_created = date("Y-m-d h:i:s");
		$date_end = date('Y-m-d h:i:s', strtotime($date_created . ' +7 days'));

		$contentData = [
			"post_id" => $post_id,
			"title" => $data[0]["title"],
			"body" => $data[0]["body"],
			"category_id" => $data[0]["category"],
			"post_status_id" => 1,
			"author_id" => $_SESSION["user"]->user_id,
			"date_created" => $date_created,
			"date_end" => $date_end
		];

		$this->insert($contentData);
	}

}   