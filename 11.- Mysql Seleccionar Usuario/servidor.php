<?php
require "conexion.php";
$usuario = $_GET['usuario'];
$usuario = (int)$usuario;
$resultado = mysqli_query($con,"Select * from alumno where matricula = $usuario");
$usuarioBD ="";
$usuarioBD .= "<table>";
$usuarioBD .= "<tr>";
$usuarioBD .= "<th> Matricula </th>";
$usuarioBD .= "<th> Nombre </th>";
$usuarioBD .= "<th> Sexo </th>";
$usuarioBD .= "<th> Año nacimiento </th>";
$usuarioBD .= "<th> Carrera </th> </tr>";
while($fila = mysqli_fetch_assoc($resultado))
{
	$usuarioBD .= "<tr>";
	$usuarioBD .= "<td>" . $fila['matricula'] . "</td>";
    $usuarioBD .= "<td>" . $fila['nombre'] . "</td>";
    $usuarioBD .= "<td>" . $fila['sexo'] . "</td>";
    $usuarioBD .= "<td>" . $fila['year_birth'] . "</td>";
    $usuarioBD .= "<td>" . $fila['clave_carrera'] . "</td> </tr>";
}
$usuarioBD .= "</table>";
echo $usuarioBD;
mysqli_close($con);
?>