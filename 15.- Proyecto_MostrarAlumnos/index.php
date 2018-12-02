<!DOCTYPE html>
<html>
<head>
	<title> Buscar </title>
	<style type="text/css">
		.miClase{
			color:blue;
		}
		button{
			padding: 15px;
			margin-left: 42%;
			font-size: 14px;
			cursor: pointer;
		}
		div#overlay{
			display: none;
			z-index: 2;
			background-color: #000000;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			text-align: center;
		}
		div#informacionDelUsuario{
			display: none;
			position: relative;
			z-index: 3;
			margin: 100px auto 0px auto;
			width: 400px;
			height: 250px;
			background:#ffffff;
			color: #000000;
			border: 4px solid #cccccc;
			font-size: 18px;
		}
		div#wrapper{
			position: absolute;
			top: 40px;
		}
		#info{
			padding: 20px;
		}
		#titulo{
			width: 100%;
			height: 12%;
			background-color: #e9e9e9;
			padding: -20px;
			text-align: center;
			font-family: arial;
			font-size: 18px;
			padding-top: 15px;
		}
	</style>
</head>
<body onload="mostrarAlumnos()">
<form>
Buscar Cliente: <input type="" id="texto" placeholder="Ingresa nombre: " onkeyup = "buscarAlumno(this.value)" />
</form>
<div id="wrapper">
<div id="mostrar"></div>
</div>

	<div id="overlay"></div>
	<div id="informacionDelUsuario">
		<div id="titulo"> Informacion Personal </div>
		<p id="info"></p>
		<button onclick="toggleOverlay(this)"> Cerrar </button>
	</div>

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
function buscarAlumno(name){
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState === 4 && xmlhttp.status===200){
				resultado.innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php?n="+name,true);
		xmlhttp.send();
	}
function toggleOverlay(elemento){
		var overlay = document.getElementById("overlay");
		var InformacionDelUsuario = document.getElementById("informacionDelUsuario");
		var info = document.getElementById("info");
		overlay.style.opacity = .6;
		if(overlay.style.display =="block"){
			overlay.style.display = "none";
			informacionDelUsuario.style.display ="none";
		}else{
			overlay.style.display ="block";
			informacionDelUsuario.style.display = "block";
		}
	}
</script>
</body>
</html>