<?php
    class HomeController extends Controller {

        private $session;
      

        public function __construct(){
            $this->usuarioModel = $this->modelo('Usuario');
            $this->session = new Session();
            $this->session->init();
            // var_dump($_SESSION);
            if($this->session->getStatus() === 1 || empty($this->session->get('email'))){
                exit('Acceso denegado');
            }
        
        }

        public function closeSession()
        {
            $this->session->close();
            header('location: '.NAME_SITE);
        }

        public function index()
        {
            $error = $this->usuarioModel->getError();

            $datos = [
                'titulo' => 'Que loco!',
                'error' => $error
            ];
            $this->view('pages/home/index', $datos);
        }

        public function show($param)
        {
            $params = array('titulo' => 'Login', 'parametro' => "juego", 'username' => $this->session->get('username'));
            $this->render(__CLASS__, $params);
        }

        public function perfil($param)
        {
            // print_r($this->session->get('email'));
            $usuario = $this->usuarioModel->getUser($this->session->get('email'));

            $params = array('titulo' => 'Login', 'parametro' => "perfil", 'user' => $usuario);
            $this->render(__CLASS__, $params);
        }

        public function dashboard($param){

            $params = array('titulo' => 'Login', 'parametro' => "dashboard", 'username' => $this->session->get('username'));
            $this->render(__CLASS__, $params);
        }

        public function exec($param)
        {
            $this->show($param);
        }
        public function update($num_register)
        {
            echo $num_register;
        }
    }

?>