<?php

    #require 'conexion.php';

    class Controller {

        private $c;

        public function __construct($c)
        {
            $this->c = $c;
        }

        public function comprobarUsuario($nick) {
            try {
                $stmt = ($this->c)->prepare("SELECT nick FROM usuario WHERE nick IN (?)");
                $stmt->bindParam(1, $nick);
                $stmt->execute();

                $check = $stmt->fetch(PDO::FETCH_ASSOC);

                if(!$check) {
                    return false;
                }
                
                return true;

            } catch (\PDOException $e) {
                return $e->getMessage();
            }
        }

        public function accesoUsuario($nick, $pass) {
            try {
                echo 'acceso usuario';
            } catch (\PDOException $e) {
                $e->getMessage();
            }
        }
    }

?>