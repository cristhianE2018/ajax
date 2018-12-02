<?php
include("clases/conexion.php");
$obj = new conectar();
$conexion = $obj -> conexion("root","");
$matri = $_GET['clave'];
$query = "delete from alumno where matricula = '$matri'";
$link = mysqli_query($conexion,$query);
if($link)
{
	$message="Eliminado con exito";
}
else
{
	$message="Error al eliminar";
}
header("Location: index.php?msg=$message");
?>