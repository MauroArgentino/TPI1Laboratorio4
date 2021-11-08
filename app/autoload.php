<?php 

	require_once 'config/configure.php';
	require_once 'helpers/url_helper.php';
	// require_once 'libraries/Base.php';
	// require_once 'libraries/Controller.php';
	// require_once 'libraries/Core.php';


	spl_autoload_register(function($nombreClase){
		require_once 'libraries/'.$nombreClase.'.php';
	});

 ?>