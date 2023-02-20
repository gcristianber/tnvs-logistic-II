<?php


class DocumentTrackerModel
{

	use Model;

	protected $table = "document_tracker";
	protected $view_table = 'document_tracker_view';

	public function compose($request){
		
		date_default_timezone_set('Asia/Hong_Kong');

        $data["tracking_id"] = uniqid("DOC-");
        $data["date_created"] = date("Y-m-d h:i:s");
        $data["status_id"] = 1;
        $data["author_id"] = $_SESSION["user"]->user_id;

        $data = array_merge($data, $request);
        
        $documentTracker = new DocumentTrackerModel;
        $documentTracker->insert($data);  
        
        $trackerFeedback = new TrackerFeedbackModel;
        $trackerData["tracking_id"] = $data["tracking_id"];
        $trackerData["status_id"] = $data["status_id"];
        $trackerData["status_feedback"] = 'Document has set to pending.';
        $trackerData["action_date"] = $data["date_created"];

        $trackerFeedback->insert($trackerData);

		return false;
	}

	public function renderView()
	{

		$query = "select * from $this->view_table";

		return $this->query($query);
	}

	public function searchViewByCriteria($data, $data_not = [])
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

		$result = $this->query($query, $data);
		if ($result)
			return $result[0];

		return false;
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

	public function countAll()
	{

		$query = "SELECT count(*) FROM $this->view_table";
		return $this->query($query);
	}



	public function countWhere($data, $data_not = [])
	{
		$keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "SELECT count(*) as count FROM $this->view_table WHERE ";

		foreach ($keys as $key) {
			$query .= $key . " = :" . $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :" . $key . " && ";
		}

		$query = trim($query, " && ");

		$data = array_merge($data, $data_not);

		$result =  $this->query($query, $data);

		if ($result)
			return $result[0];
	}

	public function getStatusCount($data, $data_not = [])
	{
		$statusMap = array(
			'pending' => 0,
			'received' => 0,
			'working' => 0,
			'onhold' => 0,
			'archived' => 0,
			'declined' => 0
		);

		$keys = array_keys($data);
		$keys_not = array_keys($data_not);

		$query = "SELECT status_name, count(*) as count FROM $this->view_table WHERE ";

		foreach ($keys as $key) {
			$query .= $key . " = :" . $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :" . $key . " && ";
		}

		$query = trim($query, " && ");
		$data = array_merge($data, $data_not);
		// echo $query;
		$result = $this->query($query, $data);

		foreach ($statusMap as $status_name => $status_count) {
			$status = $result[0]->status_name;
			$count = $result[0]->count;

			if (array_key_exists($status, $statusMap)) {
				$statusMap[$status] = $count;
			}
		}

		return $statusMap;
	}

	public function actionRequest($request){
		
		print_r($request);

		date_default_timezone_set('Asia/Hong_Kong');

		if(isset($request["is_received"])){
			$target_id = $request["target_id"];
			$target_col = ["status_id"=>2];

			
			$this->update($target_id,$target_col, 'tracking_id'); 


			$trackerFeedbackModel = new TrackerFeedbackModel;
			$insert = [
				"tracking_id" => $target_id,
				"status_id" => 2,
				"status_feedback" => 'Document has been received',
				"action_date" => date("Y-m-d h:i:s")
			];

			$trackerFeedbackModel->insert($insert);
			return false;
		}

		if(isset($request["is_hold"])){
			$target_id = $request["target_id"];
			$target_col = ["status_id"=>3];

			
			$this->update($target_id,$target_col, 'tracking_id'); 


			$trackerFeedbackModel = new TrackerFeedbackModel;
			$insert = [
				"tracking_id" => $target_id,
				"status_id" => 3,
				"status_feedback" => 'Document has been hold',
				"action_date" => date("Y-m-d h:i:s")
			];
			
			$trackerFeedbackModel->insert($insert);
			return false;	
		}

		if(isset($request["is_archived"])){
			$target_id = $request["target_id"];
			$target_col = ["status_id"=>4];

			
			$this->update($target_id,$target_col, 'tracking_id'); 


			$trackerFeedbackModel = new TrackerFeedbackModel;
			$insert = [
				"tracking_id" => $target_id,
				"status_id" => 4,
				"status_feedback" => 'Document has been successfully archived.',
				"action_date" => date("Y-m-d h:i:s")
			];
			
			$trackerFeedbackModel->insert($insert);
			return false;	
		}

		if(isset($request["is_declined"])){
			$target_id = $request["target_id"];
			$target_col = ["status_id"=>5];

			
			$this->update($target_id,$target_col, 'tracking_id'); 


			$trackerFeedbackModel = new TrackerFeedbackModel;
			$insert = [
				"tracking_id" => $target_id,
				"status_id" => 5,
				"status_feedback" => 'Document has been declined',
				"action_date" => date("Y-m-d h:i:s")
			];
			
			$trackerFeedbackModel->insert($insert);
			return false;	
		}

	}

}
