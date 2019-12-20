<?php

//protected
if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0){
	header('location:'.CONFIG['protocol'].$_SERVER[HTTP_HOST]);
}

require_once 'vendor/autoload.php';

use EASY\Connect;
use EASY\Query;

$connect  = new Connect();
$conn = $connect->conn(CONFIG['hostname'],CONFIG['username'], CONFIG['password'],CONFIG['database']);

require_once BASE.'/routes/routes.php';