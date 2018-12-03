<!DOCTYPE html>
<html>
<head>
	<title> Leer XML </title>
</head>
<body>
	<select id="listaDeUsuarios" onchange="usuarioSeleccionado()"></select><br/><br/>
	<div id="info"></div>
	<script type="text/javascript">
function ejecutarAjax(){
			var resultado = document.getElementById("listaDeUsuarios");
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}
			else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState === 4 && xmlhttp.status ===200){
					if(xmlhttp.responseXML !== null){
						var xmlDoc = xmlhttp.responseXML;
						var usuarios ="";
						var persona = xmlDoc.getElementsByTagName("cliente");
						for(var i=0; i<persona.length; i++){
							usuarios += "<option>" + persona[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + "</option>";
						}
						resultado.innerHTML = usuarios;
					}
				}
			}
			xmlhttp.open("GET","datos.xml",true);
			xmlhttp.send();
		}
		ejecutarAjax();
function usuarioSeleccionado(){
	var e = document.getElementById("listaDeUsuarios");
	var usuario = e.options[e.selectedIndex].text;
	document.getElementById("info").innerHTML = usuario + " fue seleccionado";
}
</script>
</body>
</html>