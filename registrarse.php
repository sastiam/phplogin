
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - PHPPDO</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel="stylesheet">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container bg-white pb-5">
    <div class="row d-flex justify-content-start align-items-center mt-sm-5">
        <div class="col-lg-5 col-10">
            <div class="pb-5"> <img src="https://img.freepik.com/free-vector/authentication-concept-illustration_114360-2168.jpg?size=338&ext=jpg&ga=GA1.2.777073396.1599399655" alt=""> </div>
        </div>
        <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-3">
            <div class="pt-4">
                <h2><span class="fa fa-superpowers text-primary px-md-2"></span>PHPLOGIN PDO</h2>
            </div>
            <div class="mt-3 mt-md-5">
                <h5>Registra tu cuenta</h5>
                <form class="pt-4" method="post" action="controller_usuario.php?action=registrar">
                    <div class="d-flex flex-column pb-3"> 
                        <label for="nombre">Nombre</label> 
                        <input type="text" name="nombre" class="border-bottom border-primary"> 
                    </div>
                    <div class="d-flex flex-column pb-3"> 
                        <label for="nick">Nick</label> 
                        <input type="text" name="nick" class="border-bottom border-primary"> 
                    </div>
                    <div class="d-flex flex-column pb-3"> 
                        <label for="clave">Contraseña</label> 
                        <input type="password" name="clave" class="border-bottom border-primary"> 
                    </div>
                    <input type="submit" id="registrateBtn" value="Registrate" class="btn btn-primary btn-block mb-3">
                    <div class="register mt-5">
                        <p>¿Ya tienes una cuenta? <a href="#">Logueate</a></p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>
