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
    <link href='https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css' rel="stylesheet">
    <link rel="stylesheet" href="cuenta.css">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
        <h1 class="float-md-center mb-0">PHPPDO - Cuenta</h1>

        </div>
    </header>

    <main class="px-3">
        <h1>Bienvenido @<?php echo $_SESSION['nombre'] ?></h1>
        <p class="lead">Este es el dashboard principal de la cuenta</p>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Grupo integrado por <a href="#" class="text-white">@Ayrton</a> y <a href="#" class="text-white">@Sebastian</a>.</p>
    </footer>
    </div>
</body>
</html>