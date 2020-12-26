<?php

    #require 'conexion.php';

    require 'crud_usuario.php';

    

    if(isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'registrar':
                $crud = new CRUD();
                $usuario = new Usuario($_POST['nombre'], $_POST['nick'], $_POST['clave']);
                
                $registrar = $crud->registrarUsuario($usuario);
                if($registrar) {
                    echo 'Registro satisfactorio';
                    header('Location: index.php');
                } else {
                    echo 'Error al registrarse';
                    header('Location: registrarse.php');
                }
                break;
            case 'login':
                $crud = new CRUD();
                $login = $crud->accesoUsuario($_POST['nick'], $_POST['clave']);
                if($login) {
                    session_start();
                    $_SESSION['nick'] = $login['nick'];
                    $_SESSION['nombre'] = $login['nombre'];
                    $_SESSION['clave'] = $login['clave'];
                    
                    header('Location: cuenta.php');
                    exit();
                } else {
                    header('Location: error.php');
                    exit();
                }
                break;
            default:
                echo 'default switch';
                break;
        }
    }

?>