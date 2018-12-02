<?php
//SE CAPTURAN LOS DATOS QUE NOS ENVIA EL ARCHIVO INDEX.PHP
require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj -> conexion("root","");
$numcontrol = $_GET['txtcontrol'];
$nombre = $_GET['txtnombre']; 
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];
$carrera = $_GET['txtcarrera'];
//SE ESTABLECE LA INSTRUCCION SQL
$query="Insert into alumno values('$numcontrol','$nombre','$sexo','$year','$carrera')"; 
//SE EJECUTA LA INSTRUCCION SQL
$link= mysqli_query($conexion, $query);
//EN CASO QUE TODO SE REALICE CORRECTAMENTE SE MANDA EL MENSAJE DE EXITO
if ($link)
{
	$msg="Registro almacenado";
	header("Location: index.php?msg=$msg");
}
else
{
   $msg="Error al almacenar";    
   header("Location: index.php?msg=$msg");
}
?>