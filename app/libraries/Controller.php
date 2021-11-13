<?php 

	/**
	 * 
	 */
	abstract class Controller
	{
		private $view;

		public function __construct()
		{
			echo __CLASS__ . ' instanciada';
		}

		abstract public function exec($param);
		// {
		// 	echo '<br>Ejecutando método exec()';
		// }

		protected function render($controller_name = '', $params = array()){
			$this->view = new View($controller_name, $params);
		}
		
		public function modelo($modelo)
		{
			require_once '../app/models/'.$modelo.'.php';
			return new $modelo();
		}


		// public function view($vista, $datos = [])
		// {
		// 	if (file_exists('../app/views/'.$vista.'.php')){
		// 				require_once '../app/views/'.$vista.'.php';
		// 			} else {
		// 				die ('La vista no existe');
		// 			}
			
		// }
	}


?>