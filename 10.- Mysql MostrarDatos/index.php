<!DOCTYPE html>
<html>
<head>
	<title> Base Datos </title>
</head>
<body>
<button onclick="mostrarAlumnos()"> Mostrar Alumnos </button>
<div id="info"></div>
<script type="text/javascript">
	var resultado = document.getElementById("info");
	function mostrarAlumnos(){
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(this.readyState === 4 && this.status === 200){
				resultado.innerHTML = this.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php", true);
		xmlhttp.send();
	}
</script>
</body>
</html>