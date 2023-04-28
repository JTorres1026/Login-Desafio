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
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            
            <!--Boton para ingresar-->
            <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>

    </div>

</body>

</html>