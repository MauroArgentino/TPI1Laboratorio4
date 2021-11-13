<?php 
	require_once '../app/autoload.php';

	$init = new Core();

	// echo '<pre>';
	// print_r($init->getUri());
	// echo '</pre>';

	$controller = $init->getController();
	$metodo = $init->getMethod();
	$param = $init->getParam();

	// echo "Controlador: {$controller} </br>";
	// echo "Método: {$metodo} </br>";
	// echo "Param: {$param} </br>";

	require '../'.PATH_CONTROLLERS . "{$controller}Controller.php";

	$controller .= 'Controller';
	$controller = new $controller();

	$controller->$metodo($param);

	// echo $_SERVER['REQUEST_URI'];
	// echo $_SERVER['DOCUMENT_ROOT'];
?>