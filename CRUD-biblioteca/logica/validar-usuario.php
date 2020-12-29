<?php
    session_start();
    require_once('conexion.php');

    
    if(isset($_POST['loguear'])) {
        $user = $_POST['email'];
        $password = $_POST['pass'];
        
        
        $consulta = mysqli_query($conexion, "SELECT COUNT(*) as contar from usuarios WHERE usuario = '$user' and clave = '$password'");
        $array = mysqli_fetch_array($consulta);
        
        if($array['contar']>0){
            $_SESSION['username'] = $user;
            header('location: ../index.php');
        } else {
            header('Refresh: 0.1; URL=../login.php');
            echo "<script>alert('¡Datos incorrectos!');</script>";
        }
    }

    if(isset($_POST['registrar'])) {
        if (isset($_POST['emailReg'], $_POST['passReg']) and $_POST['emailReg'] !="" and $_POST['passReg']!=""){
            $newUser = $_POST['emailReg'];
            $newPassword = $_POST['passReg'];

            $consulta = mysqli_query($conexion, "SELECT COUNT(*) as contar from usuarios WHERE usuario = '$newUser'");
            $array = mysqli_fetch_array($consulta);
            if($array['contar']>0){
                header('Refresh: 0.1; URL=../registro.php');
                echo "<script>alert('¡El usuario ya existe!');</script>";
            } else {

                $sql = "INSERT INTO usuarios(usuario, clave) VALUES ('$newUser', '$newPassword')";
                $query = mysqli_query($conexion, $sql) or die ('Error al realizar la consulta');

                $_SESSION['username'] = $newUser;
                header('Location: ../index.php');
            }
        }
    }
?>



