<?php
require "conexion.php";
$result = mysqli_query($con,"Select * from alumno");
$usuariosBD ="";
$usuariosBD .= "<table>";
$usuariosBD .= "<tr>";
$usuariosBD .= "<th> Matricula </th>";
$usuariosBD .= "<th> Nombre </th>";
$usuariosBD .= "<th> Sexo </th>";
$usuariosBD .= "<th> Año nacimiento </th>";
$usuariosBD .= "<th> Carrera </th> </tr>";
while($row = mysqli_fetch_assoc($result))
{
	$usuariosBD .= "<tr>";
	$usuariosBD .= "<td>" . $row['matricula'] . "</td>";
    $usuariosBD .= "<td>" . $row['nombre'] . "</td>";
    $usuariosBD .= "<td>" . $row['sexo'] . "</td>";
    $usuariosBD .= "<td>" . $row['year_birth'] . "</td>";
    $usuariosBD .= "<td>" . $row['clave_carrera'] . "</td> </tr>";
}
$usuariosBD .= "</table>";
echo $usuariosBD;
mysqli_close($con);

?>