<?php
$usuario = $_GET['txtnombre'];
$contra = $_GET['txtpassword'];
require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj -> conexion($usuario,$contra);
//$conexion = mysqli_connect("localhost",$usuario,$contra,"ejemplophp1") or die("Error de conexion");
if($conexion)
{
	header("Location: index.php?usu =$usuario & contra=$contra");
}
else
{
	header("Location: login.php");
}
?>