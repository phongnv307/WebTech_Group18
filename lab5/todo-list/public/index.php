<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = substr($_GET['url'], 0, -6);

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');