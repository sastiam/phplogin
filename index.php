<?php 
    require 'crud_usuario.php';
    #require 'controller_login.php';

    #$registro = new CRUD();
    #$usuario = new Usuario('nadd', 'nad', '12345678');
    #$funcion = $registro->registrarUsuario($usuario);

    $crud = new CRUD();
    print_r($crud->actualizarUsuario('nad', new Usuario('nadd', 'natd', '123456789')));
    #$controller = new Controller();
    #print_r($controller->comprobarUsuario('tiam'));
    
    #$funcion = $registro->listarDatos();
    #print_r($funcion);
?>