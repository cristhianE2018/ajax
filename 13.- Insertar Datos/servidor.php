<?php
require "conexion.php";
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$nacimiento = $_POST['nacimiento'];
$carrera = $_POST['carrera'];
if(empty($matricula) || empty($nombre) || empty($sexo) || empty($nacimiento) || empty($carrera))
{
	echo "<h1> Faltan datos por ingresar </h1>";
}
else{
	$resultadoBD = mysqli_query($con,"Insert into alumno values('$matricula','$nombre','$sexo','$nacimiento','$carrera')");
	echo "<h1> gracias </h1>";
	mysqli_close($con);
}

?>