<?php
    require_once 'header.php';
    require_once 'logica/crud.php';

    $id = $_GET['id'];
?>
<main id="mainActualizar">
    <div class="container">
        <h1>Modificar libro</h1>
        <form action='consultar.php' method='post'>
            <table class="table" id="tablaActualizar">

                <?php 
                    foreach (actualizarLibro($id) as $libro) :
                ?>

                <tr>
                    <td>Id:</td>
                    <td><input type='text' name='id' value='<?php echo $libro['id'];?>' readonly></td> 
                </tr>
                <tr>
                    <td>Nombre libro:</td>
                    <td> <input type='text' name='nombre' value='<?php echo $libro['nombre'];?>'></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td><input type='text' name='autor' value='<?php echo $libro['autor'];?>' ></td>
                </tr>
                <tr>
                    <td>Fecha de edición:</td>
                    <td><input type='text' name='edicion' value='<?php echo $libro['anio_edicion']; ?>'></td>
                </tr>

                <?php
                    endforeach;
                ?>

                <input type='hidden' name='actualizar' value='actualizar'>
            
            </table>
            <div id="botonesActualizar">
                <button type='submit' class="btn btn-primary">Guardar</button>
                <a href="consultar.php" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>
</main>

<?php
    require_once "footer.html"
?>