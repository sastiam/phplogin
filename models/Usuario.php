<?php
    class Usuario {
        private $nombre;
        private $usuario;
        private $pass;

        public function __GET($k) {return $this->$k;}
        public function __SET($k, $v) {return $this->$k=$v;}
    }
?>