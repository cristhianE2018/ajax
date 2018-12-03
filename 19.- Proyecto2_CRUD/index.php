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
	</script>
</body>
</html>