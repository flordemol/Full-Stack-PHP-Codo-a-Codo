<?php

    $conexion = mysqli_connect("localhost", "root", "", "biblioteca");

    if(mysqli_connect_errno()){
        echo "Error de conexión".mysqli_connect_errno();
    }

?>
