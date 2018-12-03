<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Proyecto 2 CRUD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap3/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap3/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="info"></div>
	</div>

	<script type="text/javascript">
		var resultado = document.getElementById("info");

		function mostrarUsuarios() {
			var xmlhttp;
			if(window.XMLHttpRequest) 
				xmlhttp = new XMLHttpRequest();
			else
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			xmlhttp.onreadystatechange = function() {
				if(this.readyState === 4 && this.status === 200) {
					 resultado.innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open("GET", "servidor.php?personas=" + "personas", true);
			xmlhttp.send()
		}

		mostrarUsuarios();

		function editarUsuario(usuarioID) {
			var nombreID = "nombreID" + usuarioID;
			var emailID = "emailID" + usuarioID;
			var borrar = "borrar" + usuarioID;
			var actualizar = "actualizar" + usuarioID;
			var editarNombreID = nombreID + "-editar";

			var nombreDelUsuario = document.getElementById(nombreID).innerHTML;
			var parent = document.querySelector("#" + nombreID);

			if(parent.querySelector("#" + editarNombreID) === null) {
				document.getElementById(nombreID).innerHTML = '<input type="text" id="' + editarNombreID +'" value="' + nombreDelUsuario +'">';
				document.getElementById(borrar).disabled = "true";
				document.getElementById(actualizar).style.display = "block";
			}
		}
	</script>
</body>
</html>