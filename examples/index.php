<?php

require_once '../vendor/autoload.php';


use EASY\Connect;
use EASY\Query;

$conn  = new Connect('localhost','root', '','intermez_system');
$query = new Query($conn);

var_dump($query);