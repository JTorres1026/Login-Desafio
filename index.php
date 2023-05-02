<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8"> </meta>

</head>

<body>



    <div class="login">

        <h1 class="text-center">Iniciar Sesión</h1>
        
        <form class="needs-validation" action="validar.php" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Correo electrónico</label>
                <!--Cuadro de texto para el email-->
                <input class="form-control" type="text" id="email" name="usuario">
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Contraseña</label>
                <!--Cuadro de texto para la contraseña-->
                <input class="form-control" type="password" id="password" name="contraseña">
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            
            <!--Boton para ingresar-->
            <input class="btn btn-success w-100" type="submit" value="Ingresar">
        </form>

    </div>

   


</body>

</html>