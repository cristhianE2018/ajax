<!DOCTYPE html>
<html>
<head>
	<title> Seleccionar Usuario </title>
</head>
<body>
<select onchange="mostrarAlumno(this.value)">
	<option value=""> Seleccionar Persona </option>
	<option value="1"> Bills </option>
	<option value="2"> Freezer </option>
	<option value="3"> Bulma </option>
</select>
<div id="info"></div>
<script type="text/javascript">
	var resultado = document.getElementById("info");
	function mostrarAlumno(alumnoSeleccionado){
		var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}
	else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	if(alumnoSeleccionado===""){
		resultado.innerHTML = "";
	}else{
		xmlhttp.onreadystatechange = function(){
			if(this.readyState === 4 && this.status === 200){
				resultado.innerHTML = this.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php?usuario=" + alumnoSeleccionado,true);
		xmlhttp.send();
	}

}
</script>
</body>
</html>