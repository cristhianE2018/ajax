<!DOCTYPE html>
<html>
<head>
	<title> Document </title>
	<link rel="stylesheet" type="text/css" href="estilos/interfaz.css" />
</head>
<body>

<nav id="menu">
<div><a href="frmagregar.php"> Añadir Alumno </a></div>
<div><a href="index.php"> Alumnos Registrados </a></div>
</nav>

<h1 align="center"> Formulario para registro de estudiante </h1>
<form action="recibe.php" method="GET">
<table border="4" align="center">
<tr>
		<td> Numero de control </td>
		<td> <input type="text" placeholder="Numero de Control : " name="txtcontrol" class="textos"> </td>
	</tr>
	<tr>
		<td> Nombre </td>
		<td> <input type="text" placeholder="Nombre: " name="txtnombre"> </td>
	</tr>
	<tr>
		<td> Sexo </td>
		<td><label for="hombre"> Hombre </label>
	<input type="radio" name="sexo" value="hombre">
	<label for="mujer"> Mujer </label>
	<input type="radio" name="sexo" value="mujer">
	 </td>
	</tr>
	<tr>
	<td> Año de nacimiento </td>
	<td> <select name="year" id="year">
		<?php
			for($i = 1995; $i<=2010; $i++)
			{
				echo ("<option value = $i> $i </option>");
			}
		?>
	</select>
	</td>
	<tr>
		<td> Carrera </td>
		<td> <input type="text" placeholder="Carrera: " name="txtcarrera" class="textos"> </td>
	</tr>
	</tr>
	<tr>
		<td> Terminos y Condiciones </td>
		<td> 
			<label for="terminos"> Aceptar </label>
	<input type="checkbox" name="terminos" id="terminos" value="ok">
		</td>
	</tr>
	<tr>
	<td><input type="submit" value="enviar"></td>
	</tr>
</table>
</form>
<?php
	if(isset($_GET['msg']))
	{
		$mensaje = $_GET['msg'];
		echo "<h1> $mensaje </h1>";
	}
?>
</body>
</html>