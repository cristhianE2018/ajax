<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
if(empty($nombre) || empty($apellidos))
{
	echo "Por favor ingrese su nombre y apellidos";
}
else
{
	echo "Gracias " . $nombre . " " . $apellidos . "!";
}
?>