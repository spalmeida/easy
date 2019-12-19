<?php
define('BASE', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0) {
   require_once 'app/system.php';
}
