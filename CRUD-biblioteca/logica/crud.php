<?php

    require_once('conexion.php');
          
	if(isset($_POST['insertar'])) {
        if (isset($_POST['nombre'], $_POST['autor'], $_POST['anio_edicion']) and $_POST['nombre'] !="" and $_POST['autor']!="" and $_POST['anio_edicion']!=""){
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $edicion = $_POST['anio_edicion'];
        
            $sql = "INSERT INTO libro(nombre,autor,anio_edicion) VALUES ('$nombre', '$autor', '$edicion')";
            $query = mysqli_query($conexion, $sql) or die ('Error al realizar la consulta');

            $conexion->close();
            header('Location: ../consultar.php');
        } //else {
            //echo '<p>Por favor, complete todos los datos del <a href="../agregar.php">formulario</a></p>';
        //}
    } elseif (isset($_POST['actualizar'])) {
       
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $edicion = $_POST['edicion'];

        global $conexion;
        $sql = "UPDATE libro SET nombre='$nombre', autor='$autor', anio_edicion='$edicion' WHERE ID=$id";
        $query = mysqli_query($conexion, $sql) or die ('Error al realizar la consulta');

    }    
    
    if(isset($_GET['id'])){
        if ($_GET['accion']=='e') {
            eliminar($_GET['id']);
        } 
    }
   
    function listaLibros() {
        global $conexion;
            if (isset($_POST['nombreLibro'], $_POST['autorLibro'])){
                $nombreLibro = $_POST['nombreLibro'];
                $autorLibro = $_POST['autorLibro'];
        
                $query = mysqli_query($conexion, "SELECT * FROM libro WHERE nombre LIKE '%$nombreLibro%' and autor LIKE '%$autorLibro%'");
                $busqueda = mysqli_fetch_all( $query, MYSQLI_ASSOC );
                return $busqueda;
        } else {
            $sql = mysqli_query($conexion, "SELECT * FROM libro");
            $listado = mysqli_fetch_all( $sql, MYSQLI_ASSOC );
            return $listado;
        }
    }
    
    function eliminar($id){
        global $conexion;
        $sql = mysqli_query($conexion, "DELETE FROM libro WHERE ID=$id");
        $result = mysqli_query($conexion,$sql);
        header('Location: ../consultar.php');
    }
     
   function actualizarLibro($id){
        global $conexion;
        $sql = mysqli_query($conexion, "SELECT * FROM libro WHERE ID=$id");
        $result = mysqli_fetch_all( $sql, MYSQLI_ASSOC );
        return $result;
    }

?>

