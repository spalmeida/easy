<?php

namespace EASY;

class Connect extends \PDO{

	private 	$hostname;
	private 	$username;
	private 	$password;
	private 	$dbname;
	private 	$charset;
	private 	$private_token;
	protected 	$conn;

	public function __construct($hostname,$username,$password,$dbname,$charset = 'utf8'){

		 	$this->hostname	=	$hostname;
		 	$this->username	=	$username;
		 	$this->password	=	$password;
			$this->dbname	=	$dbname;
			$this->charset	=	$charset;

		try{
			$this->conn = new \PDO(
				"mysql:host=$this->hostname;
				dbname=$this->dbname;
				charset=$this->charset",
				$this->username,
				$this->password);

			$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		}
		catch(\PDOException $e){
			die(json_encode(array('Connection' => false, 'message' => 'Unable to connect')));
		}

	}

	public function conn(){
		return $this->conn;
	}

}