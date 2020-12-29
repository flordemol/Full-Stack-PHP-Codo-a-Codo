<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de productos artísticos y pinturas">
    <meta name="keywords" content="venta, pintura, oleo, acrilico, pincel">
    <meta name="author" content="Florencia De Mollein">
    <title>Biblioteca</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <!-- Menú de navegación -->

        <?php
            
            if(isset($_SESSION['username'])){
                include "nav-con-log.html";
            } else{
                include "nav-sin-log.html";
            }   
        ?>
        
    </header>