<?php 

	define('APP_PATH', dirname(dirname(__FILE__)));

	define('URI', $_SERVER['REQUEST_URI']);

	define('PATH_CONTROLLERS', 'app/controllers/');
	define('PATH_VIEWS', 'app/views/');
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
	define('URL_PATH', 'http://localhost/laboratorio4/tpi1');
	
	define('NAME_SITE', '/laboratorio4/tpi1');

	// Credenciales BASE DE DATOS

	define('DB_NAME', 'memogame');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');	
	
 ?>