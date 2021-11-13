<?php

    class Login extends Model
    {
        private $db;

        function __construct()
        {
            $this->db = new Base;
            //return $this->db->getError();
            
        }

        public function signIn($email)
        {
           $this->db->query("SELECT * FROM usuarios WHERE email = '{$email}'");
           return $this->db->register();
           echo $this->db->register();
        }

        public function rowCount()
        {
            return $this->db->rowCount();
        }

    }

?>