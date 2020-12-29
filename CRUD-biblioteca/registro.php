<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de productos artísticos y pinturas">
    <meta name="keywords" content="venta, pintura, oleo, acrilico, pincel">
    <meta name="author" content="Florencia De Mollein">
    <title>Registro</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body class="registro">
    <div class="container">
        <div id="fondoFormLogin">
            <a href="index.php" id="volver">Volver</a>
            
            <h1>Alejandría</h1>

            <div id="logoLogin">
                <img src="img/favicon.png" alt="Logo">
            </div>
            
            <h2>Registrarme</h2>
        
            <form action="logica/validar-usuario.php" method="POST">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="form-group">
                            <label for="emailReg">Ingresa tu correo electrónico</label>
                            <input type="email" name="emailReg" id="emailReg" autofocus class="form-control" placeholder="tuMail@ejemplo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="passReg">Crea una contraseña <small>(de 8 a 12 caracteres)</small></label>
                            <input type="password" name="passReg" id="passReg" class="form-control" minlength="8" maxlength= "12" placeholder="********" required>
                        </div>
                        <input type='hidden' name='registrar' value='registrar'>
                        <button type="submit" class="btn btn-primary btn-block" id="btn-registrar">REGISTRARME</button>

                        <a href="login.php" id="btn-login">Ingresar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>