<?php 
	require_once '../app/autoload.php';

	$init = new Core();

	echo '<pre>';
	print_r($init->getUri());
	echo '</pre>';
?>