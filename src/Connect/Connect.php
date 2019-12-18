<?php

namespace EASY;
use PDO;

class Connect{

	public function conn($hostname,$username,$password,$dbname,$charset = 'utf8'){
		try{
			$conn = new PDO(
				"mysql:host=$hostname;
				dbname=$dbname;
				charset=$charset",
				$username,
				$password);

			$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		}
		catch(\PDOException $e){
			die(json_encode(array('Connection' => false, 'message' => 'Unable to connect')));
		}
		return $conn;
	}

}