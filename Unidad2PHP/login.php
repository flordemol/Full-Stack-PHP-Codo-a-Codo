<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
    <div class="container m-3">
        <h2 class="mb-4">Bienvenido al Sistema</h2>
        
        <p class="bg-info text-white p-2 d-inline my-3">Los datos ingresados son:</p>
        
        <div class="text-danger my-3">
            <?php
                echo "Tu Usuario: ".$_POST["usuario"]."</br>";
                echo "Tu Clave: ".$_POST["clave"]."</br>";
            ?>
        </div>
    </div>
</body>
</html>