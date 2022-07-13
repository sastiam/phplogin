<?php

    class Usuario {
        private $nombre;
        private $nick;
        private $clave;

        public function __construct($nombre, $nick, $clave)
        {
            $this->nombre = $nombre;
            $this->nick = $nick;
            $this->clave = md5($clave);
        }

        public function getNombre() {
            return $this->nombre;
        }
        
        public function getNick() {
            return $this->nick;
        }

        public function getClave() {
            return $this->clave;
        }

    }
?>