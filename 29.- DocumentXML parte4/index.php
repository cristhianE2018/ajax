<!DOCTYPE html>
<html>
<head>
	<title> Leer XML </title>
</head>
<body>
Buscar Persona: <input type="type" onkeyup="ejecutarAjax(this.value)" placeholder="Ingresa cliente:" >
<div id="info"></div>
<script type="text/javascript">
	function ejecutarAjax(nombreUsuario){
		var resultado = document.getElementById("info");
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState === 4 && xmlhttp.status ===200){
				if(xmlhttp.responseXML !== null){
					var xmlDoc = xmlhttp.responseXML;
					var x = encontrarPersona(xmlDoc,nombreUsuario);
					resultado.innerHTML = x;
				}
			}
		}
		xmlhttp.open("GET","datos.xml",true);
		xmlhttp.send();
	}
function encontrarPersona(xmlDoc, usuario){
	var mensaje ="";
	var usuarios = [];
	var persona = xmlDoc.getElementsByTagName("cliente");
	for(var i=0; i<persona.length; i++){
			usuarios.push(persona[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue);
	}
	mensaje = usuarios.indexOf(usuario) !== -1 ? "Si fue encontrado" : "No fue encontrado";
	return mensaje;
}
</script>
</body>
</html>