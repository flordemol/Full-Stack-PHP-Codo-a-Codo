<?php
	require_once "header.php";

	if(!isset($_SESSION['username'])){
		header('Location: index.php');
	}
?>

<main id="mainAgregar">
	<div class="container">
		<h1>Ingresar un nuevo libro</h1>

		<form action='logica/crud.php' method='post'>
			<table class="table" id="tablaAgregar">
				<tr>
					<td>Nombre libro:</td>
					<td> <input type='text' name='nombre' required></td>
				</tr>
				<tr>
					<td>Autor:</td>
					<td><input type='text' name='autor' required></td>
				</tr>
				<tr>
					<td>Fecha de edición:</td>
					<td><input type='text' name='anio_edicion' required></td>
				</tr>
				<input type='hidden' name='insertar' value='insertar'>
			</table>
			<div id="botonesAgregar">
				<button type='submit' class="btn btn-primary">Guardar</button>
				<a href="index.php" class="btn btn-secondary">Volver</a>
			</div>
		</form>
	</div>
</main>

<?php
    require_once "footer.html"
?>