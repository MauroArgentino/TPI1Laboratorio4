<?php 
	error_reporting(E_ALL);

	ini_set('ignore_repeated_errors', TRUE);

	ini_set('display_errors', FALSE);

	ini_set('log_errors', TRUE);

	ini_set('error_log', APP_PATH.'/php_error.log');

	echo APP_PATH;
	die();

	error_log("Hola, errores");
?>