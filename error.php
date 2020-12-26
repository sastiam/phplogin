<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link href='https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css' rel="stylesheet">
    <link rel="stylesheet" href="cuenta.css">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h1 class="masthead-brand">PHPPDO</h3>
        </div>
    </header>

    <main class="px-3">
        <h1>Ocurrio un error 😥, intenta de nuevo.</h1>
        <p class="lead">Logueate desde <a href="index.php" class="text-white">aqui</a></p>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Grupo integrado por <a href="#" class="text-white">@Ayrton</a> y <a href="#" class="text-white">@Sebastian</a>.</p>
    </footer>
    </div>
</body>
</html>