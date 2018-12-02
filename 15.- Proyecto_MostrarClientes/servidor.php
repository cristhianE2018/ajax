<?php
require "conexion.php";
$resultado = mysqli_query($con,"Select * from alumno");
while($fila = mysqli_fetch_assoc($resultado)){
	echo '<div>' . $fila['nombre']. '</div>';
	echo '<input type = "hidden" value="'.$fila['sexo'].'">';
}
mysqli_close($con);
?>