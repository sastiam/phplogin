<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller_usuario.php?action=registrar" method="post">
        <input name='nombre' placeholder="Nombre" type="text">
        <input name='nick' placeholder="Nick" type="text">
        <input name='clave' placeholder="Contraseña" type="password">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>