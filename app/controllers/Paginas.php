<?php
    class Paginas extends Controller {
        public function __construct(){
           // echo 'Controlador páginas cargado';
        }

        public function index()
        {
            $datos = [
                'titulo' => 'Que loco!'
            ];
            $this->view('pages/login/index', $datos);
        }

        public function articles()
        {
            // code...
        }

        public function update($num_register)
        {
            echo $num_register;
        }
    }

?>