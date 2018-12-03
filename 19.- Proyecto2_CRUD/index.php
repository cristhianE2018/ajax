<!DOCTYPE html>
<html>
<head>
	<title> Mostrar </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div id="wrapper">
	<div id="info"></div>
</div>
<script type="text/javascript">
	var resultado = document.getElementById("info");
function mostrarAlumnos(){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject();
	}
	xmlhttp.onreadystatechange = function(){
		if(this.readyState === 4 && this.status ===200){
			resultado.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","servidor.php?personas=" + "personas",true);
	xmlhttp.send();
}
mostrarAlumnos();
</script>
</body>
</html>