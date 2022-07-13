<?php
    // algoritmo para generador de llave
        $llave = '';
        for ($i=0; $i <4; $i++) {
                
            $generador = rand(1, 9);
            $llave = $llave . strval($generador);

        }

        require 'crud_usuario.php';

        $crud = new CRUD;

        $crud->llaveUsuario(new Usuario("Nicols", "nicol1", "123456789"));
        print_r($crud);
?>

