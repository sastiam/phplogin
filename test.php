<?php
    session_start();

    require 'crud_usuario.php';

    $usuario = new Usuario("nattts", "nat", "12345");

    $crud = new CRUD();

    $actualizar = $crud->actualizarUsuario($_SESSION['nick'], $usuario);

    echo $actualizar;
?>

