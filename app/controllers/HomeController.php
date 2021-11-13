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
            $params = array('titulo' => 'Login', 'parametro' => $param, 'username' => $this->session->get('username'));
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