<!DOCTYPE html>
<html>
<head>
	<title> Leer XML </title>
</head>
<body>
<button onclick="ejecutarAjax()"> Mostrar Informacion </button>
<div id="info"></div>
<script type="text/javascript">
	function ejecutarAjax(){
		var resultado = document.getElementById("info");
		var xmlhttp;
		var arr = [];
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState===4 && xmlhttp.status === 200){
				if(xmlhttp.responseXML !== null){
					arr[0] = xmlhttp.responseXML.getElementsByTagName("nombre").item(0);
					arr[1] = xmlhttp.responseXML.getElementsByTagName("apellido").item(0);
					arr[2] = xmlhttp.responseXML.getElementsByTagName("edad").item(0);
					resultado.innerHTML = arr[0].firstChild.nodeValue + " " + arr[1].firstChild.nodeValue
					+ " tiene " + arr[2].firstChild.nodeValue + " años de edad";
				}

			}
		}
		xmlhttp.open("GET","datos.xml",true);
		xmlhttp.send();
	}
</script>
</body>
</html>