<!DOCTYPE html>
<html>
<head>
	<title> Sugerencias </title>
</head>
<body>
<form>
	Buscar Personas: <input type="text" placeholder="Ingresar nombre : " onkeyup="mostrarUsuario(this.value)"/>
</form>
<div id="info"></div>
<script type="text/javascript">
	var resultado = document.getElementById("info");
	function mostrarUsuario(nombre){
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		if(nombre.length === ""){
			resultado.innerHTML = "";
		}
		else{
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState === 4 && this.status === 200){
					resultado.innerHTML= xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","servidor.php?nombre=" + nombre,true);
			xmlhttp.send();
		}
	}
</script>
</body>
</html>