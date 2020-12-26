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
                    header('Location: index.php');
                } else {
                    header('Location: registrarse.php');
                }
                break;
            case 'login':
                $crud = new CRUD();
                $login = $crud->accesoUsuario($_POST['nick'], $_POST['clave']);
                if($login) {
                    session_start();
                    $_SESSION['nick'] = $login['nick'];
                    
                    header('Location: cuenta.php');
                    exit();
                }
                break;
            default:
                echo 'default switch';
                break;
        }
    }

?>