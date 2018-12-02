<?php
require "conexion.php";
$nombre = $_GET['n'];
if(!empty($nombre)){
	$cliente = mysqli_real_escape_string($con,$nombre);
	$resultado = mysqli_query($con,"Select * from alumno where nombre like '%".$cliente."%'");
	while ($fila = mysqli_fetch_assoc($resultado)) 
	{
	echo '<div class = "miClase" onclick = "toggleOverlay(this)">' . $fila['nombre']. '</div>';
	echo '<input type = "hidden" value="'.$fila['sexo'].'">';
	}
	mysqli_close($con);
}
else{
	mostrarAlumnos();
}
function mostrarAlumnos(){
require "conexion.php";
$resultado = mysqli_query($con,"Select * from alumno");
while($fila = mysqli_fetch_assoc($resultado))
{
	echo '<div class ="miClase" onclick = "toggleOverlay(this)">' . $fila['nombre']. '</div>';
	echo '<input type = "hidden" value="'.$fila['sexo'].'">';
}
mysqli_close($con);
}
?>