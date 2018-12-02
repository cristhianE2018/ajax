<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/interfaz.css" />
	<?php require_once "scripts.php"; ?>
</head>
<body>
<div class="container">
<nav id="menu">
<div><a href="frmagregar.php"> Añadir Alumno </a></div>
<div><a href="index.php"> Alumnos Registrados </a></div>
</nav>
	<div class="row">
		<div class="col-sm-12">
			<div class="card text-center">
  <div class="card-header">
    <?php
    if(isset($_GET['msg']))
    {
    	$msg = $_GET['msg'];
    	echo ("<h1> $msg </h1>");
    }
    ?>
  </div>
  <div class="card-body">
  	<hr>
    <div id="tablaDatatable">
    	
    </div>
  </div>
  <div class="card-footer text-muted">
    Elaborado por : Cristhian Enrique Olivares Lara
  </div>
</div>
		</div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>