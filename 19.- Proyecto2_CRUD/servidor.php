<?php 
require "conexion.php";

$personas = $_GET['personas'];
$nombreID = "nombreID";
$emailID = "emailID";
$actualizar = "actualizar";
$borrar = "borrar";

if($personas == "personas") {
	$query = "SELECT * FROM PERSONAS";
	$resultado = mysqli_query($connection, $query);
	$table = '<div class="container">';
	$table .= '<table class="table table-striped table-bordered">';
	$table .= '<tr>';
	$table .= '<th>Usuario</th>';
	$table .= '<th>Nombre</th>';
	$table .= '<th>Email</th>';
	$table .= '<th>Editar usuario</th>';
	$table .= '<th>Borrar usuario</th>';
	$table .= '</tr>';

	while($fila = mysqli_fetch_assoc($resultado)) {
		$table .= '<tr>';
		$table .= '<td>' . $fila['ID_USUARIO'] . '</td>';
		$table .= '<td id="' . $nombreID . $fila['ID_USUARIO'] . '">' . $fila['NOMBRE'] . '</td>';
		$table .= '<td id="' . $emailID . $fila['ID_USUARIO'] . '">' . $fila['EMAIL'] . '</td>';
		$table .= '<td><input type="text" value="Editar" class="btn btn-default"></td>';
		$table .= '<td><input type="text" value="Eliminar" class="btn btn-danger"></td>';
		$table .= '<td><input type="text" value="Actualizar" class="btn btn-primary" style="display: none;"></td>';
		$table .= '</tr>';
	}
}

echo $table;
mysqli_close($connection);

 ?>