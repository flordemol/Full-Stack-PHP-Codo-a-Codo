<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <style>
    * {
        padding:0;
        margin: 0;
    }
    .container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 100vh;
        flex-wrap: wrap;
    }

    .cont2 {
        text-align: center;
        line-height: 50px;
    }

    button {
        background: blueviolet;
        color: white;
        padding: 15px;
        border: none;
        border-radius: 50px;
    }

    a {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="cont2">
            <h1>Error 404</h1>
            <p>No se encontró la ruta solicitada</p>
            <button><a href="index.php">Volver al inicio</a></button>
        </div>
        <img src="img/favicon.png" alt="libros">
    </div>
    
</body>
</html>
