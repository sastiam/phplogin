<?php
    require '../config/conexion.php';
    class UsuarioModel {
        public function __CONSTRUCT() {
            try {
                $this->pdo = Database::init();
            } catch(Exception $e) {
                die($e->getMessage());
            }
        }
        public function registrar(Usuario $data) {
            try {
                $pass_md5= md5($data->pass);
                $sql = "INSERT INTO usuario VALUES(0,?,?,?)";                
                $this->pdo->prepare($sql)
                      ->execute(
                        array(
                            $data->nombre,
                            $data->usuario,
                            $pass_md5,
                        )
                      );
            } catch(Exception $e) {
                die($e->getMessage());
            }
        }

        public function login(Usuario $data) {
            try {

                $sql = $this->pdo->prepare('SELECT * FROM usuario WHERE user IN(?) AND pass IN(?)');
                $sql->execute(array(
                    $data->usuario,
                    md5($data->pass),
                ));
                $smt = $sql->fetch(PDO::FETCH_ASSOC);
                if($smt) {
                    $_SESSION['nombre'] = $smt['nombre'];
                    header('Location: ../bienvenido.php');
                }
            } catch(Exception $e) {
                die($e->getMessage());
            }
        }
    }
    
?>