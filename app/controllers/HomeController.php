<?php
    class HomeController extends Controller {

        public function __construct(){
           $this->usuarioModel = $this->modelo('Usuario');
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

       
        public function update($num_register)
        {
            echo $num_register;
        }
    }

?>