<?php 

	require_once 'config/configure.php';
	require_once 'helpers/url_helper.php';
	// require_once 'libraries/Base.php';
	// require_once 'libraries/Controller.php';
	// require_once 'libraries/Core.php';


	spl_autoload_register(function($nombreClase){

		require_once 'libraries/'.$nombreClase.'.php';
		// if (is_file('laboratorio4/tpi1/app/libraries/$nombreClase.php')) {
		// 	require_once 'laboratorio4/tpi1/app/libraries/'.$nombreClase.'.php';
		// } else {
		// 	echo "No se pudo encontrar la clase $nombreClase";
		// }
		
	});

 ?>