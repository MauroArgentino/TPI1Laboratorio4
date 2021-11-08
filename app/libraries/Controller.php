<?php 

	/**
	 * 
	 */
	abstract class Controller
	{

		function __construct()
		{
			// code...
		}


		public function modelo($modelo)
		{
			require_once '../app/models/'.$modelo.'.php';
			return new $modelo();
		}


		public function view($vista, $datos = [])
		{
			if (file_exists('../app/views/'.$vista.'.php')){
						require_once '../app/views/'.$vista.'.php';
					} else {
						die ('La vista no existe');
					}
			
		}
	}


?>