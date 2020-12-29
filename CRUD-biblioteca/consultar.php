<?php
    require_once 'header.php';
    require_once 'logica/crud.php';
?>

<main id="mainConsultar">

<div class="container">
    <h1>Libros</h1>

    <form id="buscadores" class="container" method="POST" accion="logica/crud.php">
        <h3>Buscar:</h3>
        <div id="areaBuscadores" class="row">
            <div class="col-md-6 col-12 form-group">
                <label for="nombreLibro">Por nombre</label>
                <input type="text" class="form-control" id="nombreLibro" name="nombreLibro">
            </div>
            <div class="col-md-6 col-12 form-group">
                <label for="autorLibro">Por autor</label>
                <input type="text" class="form-control" id="autorLibro" name="autorLibro">
            </div>
        </div>
        <button class="btn btn-info" id="btn-buscador">Buscar</button>
        <button class="btn btn-info" id="btn-todo">Ver todo</button>
</form>

    <table class="table">
        <thead class="text-center">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Edicion</th>

                <?php
                    if(isset($_SESSION['username'])){
                ?>
                    <th>Editar</th>
                    <th>Borrar</th> 
                <?php
                    }
                ?>   

            </tr>
        </thead>
        <tbody class="text-center">
            <?php 
                foreach (listaLibros() as $libro) :
            ?>
            <tr>
                <td scope="row"><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['nombre']; ?></td>
                <td><?php echo $libro['autor']; ?></td>
                <td><?php echo $libro['anio_edicion'];?> </td>
                
                
                <?php
                    if(isset($_SESSION['username'])){
                ?>
                    <td><a href='actualizar.php?id=<?php echo $libro['id'];?>&accion=a'><i class='fas fa-edit'></i></a></td>
                    <td><a href="logica/crud.php?id=<?php echo $libro['id'];?>&accion=e"><i class="fas fa-trash"></i></a></td>
                <?php
                    }
                ?> 
            
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-secondary">Volver</a>
    </div>
</main>

<?php
    require_once "footer.html"
?>