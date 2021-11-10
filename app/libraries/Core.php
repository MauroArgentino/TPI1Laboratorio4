<?php 

	/**
	 * 
	 */
	class Core
	{
		private $uri;
		private $controller;
		private $method;
		private $params;

		public function __construct(){

			$this->setUri();
			$this->setController();
			$this->setMethod();
			$this->setParam();
		}

		public function setUri()
		{
			$this->uri = explode('/', URI);
		}

		// 	$url = $this->getUrl();
		// 	//var_dump($url);
		// 	if (isset($url)){
		// 		if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
		// 			$this->currentController = ucwords($url[0]);

		// 			unset($url[0]);
		// 		}
		// 	}

		// 	require_once '../app/controllers/'.$this->currentController.'.php';
		// 	$this->currentController = new $this->currentController;

		// 	if (isset($url[1])){
		// 		if (method_exists($this->currentController, $url[1])){
		// 			$this->currentMethod = $url[1];

		// 			unset($url[1]);
		// 		}
		// 	}

		// 	//echo $this->currentMethod;
		// 	$this->parameters = $url ? array_values($url) : [];

		// 	call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);
		// }

		// public function getUri()
		// {
		// 	//echo $_GET['url'];

		// 	if(isset($_GET['url'])){
		// 		$url = rtrim($_GET['url'], '/');
		// 		$url = filter_var($url, FILTER_SANITIZE_URL);
		// 		$url = explode('/', $url);
		// 		return $url;
		// 	}
		// }


		public function setController()
		{
			$this->controller = $this->uri[2] === '' ? 'Login' : $this->uri[2];
		}

		public function setMethod()
		{
			$this->method = !empty($this->uri[3]) ? $this->uri[3] : 'exec';
		}

		public function setParam()
		{
			$this->param = !empty($this->uri[4]) ? $this->uri[4] : '';
		}

		public function getUri()
		{
			return $this->uri;
		}
		

		public function getController()
		{
			return $this->controller;
		}
		
		public function getMethod()
		{
			return $this->method;
		}
		
		public function getParam()
		{
			return $this->param;
		}
	}
?>