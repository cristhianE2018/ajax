<?php
require "conexion.php";
$personas = $_GET['personas'];

$matriculaID = "matriculaID";
$nombreID = "nombreID";
$sexoID ="sexoID";
$actualizar =  "actualizar";
$borrar = "borrar";
if($personas === "personas"){
	$resultado = mysqli_query($con,"select * from alumno");
	$table .= '<div class = "container">';
	$table .= '<table class ="table table-striped table-bordered">';
	$table .= '<tr>';
	$table .= '<th> Matricula </th>';
	$table .= '<th> nombre </th>';
	$table .= '<th> sexo </th>';
	$table .= '<th> nacimiento </th>';
	$table .= '<th> carrera </th>';
	$table .= '<th> editar </th>';
	$table .= '<th> borrar </th>';
	$table .= '</tr> </div>';
	while($fila = mysqli_fetch_assoc($resultado)){
		$table .= '<tr>';
		$table .= '<td>' . $fila['matricula'].'</td>';
		$table .= '<td id ="'.$nombreID.$fila['matricula'].'">' . $fila['nombre'].'</td>';
		$table .= '<td id="'.$sexoID.$fila['matricula'].'">' . $fila['sexo'].'</td>';
		$table .= '<td>' . $fila['year_birth'].'</td>';
		$table .= '<td>' . $fila['clave_carrera'].'</td>';
		$table .= '<td> <input type ="button" value="Editar" class ="btn btn-default"></td>';
		$table .= '<td> <input type ="button" value="Eliminar" class ="btn btn-danger"></td>';
		$table .= '<td> <input type ="button" value="Actualizar" class ="btn btn-primary"></td>';
		$table .= '</tr>';
	}
}
echo $table;
mysqli_close($con);
?>