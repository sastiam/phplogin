<?php 
    require '../models/Usuario.php';
    require '../models/UsuarioModelo.php';
   

    // Logica
    $user = new Usuario();
    $model = new UsuarioModel();

    if(isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'registrar':
                $user->__SET('nombre', $_POST['nombre']);
                $user->__SET('usuario', $_POST['usuario']);
                $user->__SET('pass', $_POST['password']);

                $model->registrar($user);
                
                break;
            
            default:
                # code...
                break;
        }
    }
?>