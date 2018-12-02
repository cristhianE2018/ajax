<?php
require "conexion.php";
$nombre = $_GET["nombre"];
if(!empty($nombre))
{
	$persona = mysqli_real_escape_string($con,$nombre);
	$resultadoBD = mysqli_query($con,"Select * from alumno where nombre like '%".$persona."%'");
	while($row = mysqli_fetch_assoc($resultadoBD))
	{
		echo "<div> " . $row['nombre'] . "</div>";
	}
}

?>