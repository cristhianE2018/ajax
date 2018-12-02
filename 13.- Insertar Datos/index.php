<!DOCTYPE html>
<html>
<head>
	<title> Insertar Datos </title>
</head>
<body>
<form>
	Matricula: <input type="text" id="matricula"/><br/><br/>
	Nombre: <input type="text" id="nombre"/><br/><br/>
	sexo: <input type="text" id="sexo"/><br/><br/>
	año nacimiento: <input type="text" id="nacimiento"/><br/><br/>
	carrera: <input type="text" id="carrera"/><br/><br/>
	<input type="button" value="Enviar" onclick="ajax_post()">
</form>
<div id="info"></div>
<script type="text/javascript">
	var resultado = document.getElementById("info");
	function ajax_post(){
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		var a = document.getElementById("matricula").value;
		var b = document.getElementById("nombre").value;
		var c = document.getElementById("sexo").value;
		var d = document.getElementById("nacimiento").value;
		var e = document.getElementById("carrera").value;
		var informacionDelUsuario = "matricula="+a+"&nombre="+b+"&sexo="+c+"&nacimiento="+d+"&carrera="+e;
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
				resultado.innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","servidor.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(informacionDelUsuario);
	}
</script>
</body>
</html>