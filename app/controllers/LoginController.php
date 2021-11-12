<?php

    class LoginController extends Controller {
        
        public function __construct(){
           //$this->userModel = $this->modelo('Usuario');
            
        }

        public function index()
        {
            $datos = [
                'titulo' => 'Que loco!'
            ];
            $this->view('pages/login/index', $datos);
        }

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

        public function signin()
        {
            var_dump($_REQUEST);
        }

        public function register()
        {
            $email = $_REQUEST['email'];
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $username = $_REQUEST['username'];
            $this->userModel->createUser($username, $nombre, $apellido, $email, $password);
        }
    }

?>