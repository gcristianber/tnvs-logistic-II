<?php

trait Database{


    public function connect(){
        try {
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
            $con = new PDO($dsn, DB_USER, DB_PASS);

            return $con;
        } catch (PDOException $e) {
            $e->getMessage();
        }     
    }

    public function query($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result;
			}
		}

		return false;
	}

}