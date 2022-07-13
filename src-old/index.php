<?php
    if(!empty($_SESSION['nombre'])) {
        header('Location: cuenta.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PHPPDO</title>
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
                <h5>Ingresa a tu cuenta</h5>
                <form class="pt-4 needs-validation" method="post" action="controller_usuario.php?action=login" id="login">
                    
                    <div class="d-flex flex-column pb-3"> 
                        <label for="nick">Nick</label> 
                        <input type="text" name="nick" class="border-bottom border-primary" required> 
                    </div>
                    <div class="d-flex flex-column pb-3"> 
                        <label for="clave">Contraseña</label> 
                        <input type="password" name="clave" class="border-bottom border-primary" required> 
                    </div>
                    <div class="d-flex jusity-content-end pb-4">
                        <div class="ml-auto"> 
                        <a href="#" class="text-danger text-decoration-none">¿Te olvidaste tu contraseña?</a> 
                        </div>
                    </div> 
                    <input type="submit" value="Login" class="btn btn-primary btn-block mb-3">

                    <div class="register mt-5">
                        <p>¿No tienes una cuenta? <a href="registrarse.php">Registrate</a></p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }
            form.classList.add('was-validated');
            console.log(form);
        }, false)
        })
    })()
    $(document).ready(function() {
  $("#login").validate();
    });
</script>
</body>
</html>