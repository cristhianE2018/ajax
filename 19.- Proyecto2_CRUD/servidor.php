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
		$table .= '<td><input id="' . $fila['ID_USUARIO'] . '" onclick="editarUsuario(this.id)" type="text" value="Editar" class="btn btn-default"></td>';
		$table .= '<td><input id="' . $borrar . $fila['ID_USUARIO'] . '" onclick="borrarUsuario('. $fila['ID_USUARIO'] .')" type="text" value="Eliminar" class="btn btn-danger"></td>';
		$table .= '<td><input id="' . $actualizar . $fila['ID_USUARIO'] . '" onclick="actualizarUsuario('. $fila['ID_USUARIO'] .')" type="text" value="Actualizar" class="btn btn-primary" style="display: none;"></td>';
		$table .= '</tr>';
	}

	echo $table;
	mysqli_close($connection);
}

$usuarioIDActualizado = $_GET['usuarioIDActualizado'];
$nombreActualizado = $_GET['nombreActualizado'];

if(!empty($nombreActualizado)) {
	$cliente = mysqli_real_escape_string($connection, $nombreActualizado);
	$sql = "UPDATE PERSONAS SET NOMBRE = '$cliente' WHERE ID_USUARIO = '$usuarioIDActualizado'";
	$resultado = mysqli_query($connection, $sql);
	mysqli_close();
}

$usuarioIDEliminado = $_GET['usuarioIDEliminado'];
if(!empty($usuarioIDEliminado)) {
	$sql = "DELETE FROM PERSONAS WHERE ID_USUARIO = '$usuarioIDEliminado'";
	$resultado = mysqli_query($connection, $sql);
	mysqli_close();
}

 ?>