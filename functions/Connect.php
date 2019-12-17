<?php

use EASY\Connect;
use EASY\Query;

define('DB',array(

	'hostname'  => 'localhost',
	'username'  => 'root',
	'password'  => '',
	'dbname'    => 'myDB'
));

function conn(){

	$conn = new Connect(DB['hostname'], DB['username'],DB['password'],DB['dbname']);
	return $conn->conn();

}


function query(){
	return new Query(conn());
}