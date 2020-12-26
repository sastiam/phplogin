<?php 

    require 'conexion.php';
    require 'usuario.php';

    class CRUD {

        private $conn;

        public function __construct()
        {
            $dtb = new Database('localhost', 'phplogin', 'grupo1', 'grupo1');
            $this->conn = $dtb->init();
        }
        
        public function accesoUsuario($nick, $pass) {
            try {
                $hash_pass = md5($pass);
                $stmt = ($this->conn)->prepare("SELECT * FROM usuario WHERE nick = ? AND pass = ?");
                $stmt->bindParam(1, $nick);
                $stmt->bindParam(2, $hash_pass);

                if($stmt->execute()) {
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $data;
                } else {
                    return false;
                }

            } catch (\PDOException $e) {
                return $e->getMessage();
            }
        }

        public function registrarUsuario(Usuario $u) {
            $check = $this->checkUsuario($u->getNick());
            try {
                $stmt = ($this->conn)->prepare("INSERT INTO usuario VALUES (0, ?, ?, ?)");
                if(!$check) {
                    if ($stmt->execute(array(
                        $u->getNombre(),
                        $u->getNick(),
                        $u->getClave()
                    ))) {
                        return true;
                    } else {
                        return var_dump($stmt->errorInfo());
                    }
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }


        public function checkUsuario($nick) {
            try {
                $stmt = ($this->conn)->prepare("SELECT nick FROM usuario WHERE nick IN (?)");
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

        public function actualizarUsuario($nick, Usuario $u) {
            $dataId = $this->buscarUsuarioId($nick);
            $checkUsuario = $this->checkUsuario($u->getNick());
            try {
               if (!$checkUsuario) {
                    if($dataId != null) {
                        $stmt = ($this->conn)->prepare("UPDATE usuario SET nombre=?, nick=?, pass=? WHERE id=?");
                        $stmt->execute(array(
                            $u->getNombre(),
                            $u->getNick(),
                            $u->getClave(),
                            $dataId
                        ));
                        
                        return true;
                    } else {
                        return false;
                    }
               } else {
                   return false;
               }
            } catch (\PDOException $e) {
                $e->getMessage();
            }
        }

        public function buscarUsuarioId($nick) {
            $check = $this->checkUsuario($nick);
            try {
                if ($check) {
                    $stmt = ($this->conn)->prepare("SELECT id FROM usuario WHERE nick = ?");
                    $stmt->bindParam(1, $nick);
                    $stmt->execute();

                    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
                    if($fetch) {
                        return $fetch['id'];
                    }
                    
                } else {
                    return null;
                }
            } catch(\PDOException $e) {
                return $e->getMessage();
            }
            
        }
    }

?>