<?php

    

    class LoginController extends Controller {
        
        private $loginModel;
        private $session;

        public function __construct(){
           $this->loginModel = $this->modelo('Login');
            $this->session = new Session();
        }

        // public function index()
        // {
        //     $datos = [
        //         'titulo' => 'Que loco!'
        //     ];
        //     $this->view('pages/login/index', $datos);
        // }

        public function show($param)
        {
            $params = array('titulo' => 'Login', 'parametro' => $param);
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

        public function signin($request_params)
        {
            // var_dump($_REQUEST);
            if ($this->verify($request_params)){
                return $this->renderErrorMessage("El email y el password son obligatorios.", "error");
            }

            $result = $this->loginModel->signIn($request_params['email']);
            // var_dump($result);
            // var_dump($this->loginModel->rowCount());
            if(!$this->loginModel->rowCount()){
                return $this->renderErrorMessage("El email {$request_params['email']} no fue encontrado :(.", "error");
            }
            if(!password_verify($request_params['password'], $result->PASSWORD)){
                return $this->renderErrorMessage("El password es incorrecto", "error");
            }
            
            
            $this->session->init();
            if ($this->session->getStatus()) {
                $this->session->close();
            }
            $this->session->init();
            $this->session->add('email', $result->EMAIL);
            $this->session->add('username', $result->USERNAME);
            header('location: '.NAME_SITE.'/home');
        }

        public function verify($request_params)
        {
            return empty($request_params['email']) OR empty($request_params['password']);
        }

        public function renderErrorMessage($message, $type)
        {
            $params = array('type' => $type, 'error_message' => $message );
            $this->render(__CLASS__, $params);
        }
        public function register()
        {
            $email = $_REQUEST['email'];
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $username = $_REQUEST['username'];
           // $this->userModel->createUser($username, $nombre, $apellido, $email, $password);
        }
    }

?>