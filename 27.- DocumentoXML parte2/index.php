<!DOCTYPE html>
<html>
<head>
	<title> Leer XML </title>
</head>
<body>
<button onclick="ejecutarAjax()"> Mostrar Informacion </button><br/><br/>
<table id="info"></table>
<script type="text/javascript">
	function ejecutarAjax(){
		var resultado = document.getElementById("info");
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState===4 && xmlhttp.status === 200){
					if(xmlhttp.responseXML !== null)
					{
						var xmlDoc = xmlhttp.responseXML;
						var tabla = "<tr><th>Nombre</th><th>Apellido</th></tr>";
						var persona = xmlDoc.getElementsByTagName("cliente");
						for(var i =0; i<persona.length; i++){
							tabla += "<tr><td>"+
							persona[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + "</td><td>" +
							persona[i].getElementsByTagName("apellido")[0].childNodes[0].nodeValue + "</td>";
						}
						resultado.innerHTML = tabla;
					}
				}
	}
	xmlhttp.open("GET","datos.xml",true);
	xmlhttp.send();
}
</script>
</body>
</html>