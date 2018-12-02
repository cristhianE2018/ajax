<!DOCTYPE html>
<html>
<head>
	<title> Buscar </title>
</head>
<body onload="mostrarAlumnos()">
<form>
Buscar Cliente: <input type="" id="texto" placeholder="Ingresa nombre: " />
</form>
<div id="mostrar"></div>
<script type="text/javascript">
	var resultado = document.getElementById("mostrar");
	function mostrarAlumnos(){
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState===4 && xmlhttp.status === 200){
				resultado.innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php",true);
		xmlhttp.send();

	}
</script>
</body>
</html>