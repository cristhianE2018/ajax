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
	<div id="overlay">
		<div id="nuevaVentana">
			<div id="box-header"></div>
			<button onmousedown="ejecutarNuevaVentana()" id="botonCerrar"></button><br><br><br>
			<label>Nombre: </label><input type="text" id="nuevoUsuarioID"><br><br>
			<label>Correo: </label><input type="email" id="nuevoEmailID"><br><br><br>
			<button onmousedown="agregarUsuario()" style="margin-left: 40%;" class="btn btn-success">Agregar usuario nuevo</button>
		</div>
	</div>

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

		function actualizarUsuario(usuarioID) {
			var xmlhttp;
			if(window.XMLHttpRequest) 
				xmlhttp = new XMLHttpRequest();
			else
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			var nombreActualizado = document.getElementById("nombreID" + usuarioID + "-editar").value;
			xmlhttp.onreadystatechange = function() {
				if(this.readyState === 4 && this.status === 200) {
					mostrarUsuarios();
				}
			}

			xmlhttp.open("GET", "servidor.php?usuarioIDActualizado=" + usuarioID + "&nombreActualizado=" + nombreActualizado, true);
			xmlhttp.send();
		}

		function borrarUsuario(usuarioID) {
			var respuesta = confirm("Estas seguro de borrar este usuario?");

			if(respuesta === true) {
				if(window.XMLHttpRequest) 
					xmlhttp = new XMLHttpRequest();
				else
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

				xmlhttp.onreadystatechange = function() {
					if(this.readyState === 4 && this.status === 200) {
						mostrarUsuarios();
					}
				}

				xmlhttp.open("GET", "servidor.php?usuarioIDEliminado=" + usuarioID);
				xmlhttp.send();
			}
		}

		var overlay = document.getElementById("overlay");
		var nuevaVentana = document.getElementById("nuevaVentana");
		function ejecutarNuevaVentana() {
			overlay.style.opacity = .5;
			if(overlay.style.display == "block") {
				overlay.style.display = "none";
				nuevaVentana.style.display = "none";
			}
			else {
				overlay.style.display = "block";
				nuevaVentana.style.display = "block";
			}

			document.getElementById("nuevoUsuarioID").value = "";
			document.getElementById("nuevoEmailID").value = "";
		}

		function agregarUsuario() {
			overlay.style.display = "none";
			nuevaVentana.style.display = "none";

			if(window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}
			else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var nuevoUsuario = document.getElementById("nuevoUsuarioID").value;
			var nuevoEmail = document.getElementById("nuevoEmailID").value;

			xmlhttp.onreadystatechange = function() {
				if(this.readyState === 4 && this.status === 2000) {
					mostrarUsuarios();
				}
			}

			xmlhttp.open("GET", "servidor.php?nuevoUsuario=" + nuevoUsuario + "&nuevoEmail=" + nuevoEmail, true);
			xmlhttp.send(); 
		}
	</script>
</body>
</html>