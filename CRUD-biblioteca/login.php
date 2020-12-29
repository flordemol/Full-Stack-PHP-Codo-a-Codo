<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de productos artísticos y pinturas">
    <meta name="keywords" content="venta, pintura, oleo, acrilico, pincel">
    <meta name="author" content="Florencia De Mollein">
    <title>Login</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body class="login">
    <div class="container">
        <div id="fondoFormLogin">
            <a href="index.php" id="volver">Volver</a>
            
            <h1>Alejandría</h1>

            <div id="logoLogin">
                <img src="img/favicon.png" alt="Logo">
            </div>
            
            <h2>Ingreso al sistema</h2>
        
            <form action="logica/validar-usuario.php" method="POST">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" autofocus class="form-control" placeholder="tuMail@ejemplo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="********" required>
                        </div>
                        <div class="row form-group mx-0">
                            <div class="col-6 custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="recordarme" name="recordarme">
                                <label class="custom-control-label" for="recordarme">Recordarme</label>
                            </div>
                            <div class="col text-right p-0">
                                <a href="#" id="olvidoPass">Olvidé mi contraseña</a>
                            </div>
                        </div>
                        <input type='hidden' name='loguear' value='loguear'>
                        <button type="submit" class="btn btn-primary btn-block" id="btn-ingresar">INGRESAR</button>

                        <a href="registro.php" id="btn-registro">Registrarme</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>