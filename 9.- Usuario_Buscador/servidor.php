<?php
$personas = array("Pedro","Carlos","Cristhian","Oscar","nereyda");
$nombre = $_GET["nombre"];
$sugerencia = "";
if($nombre !== ""){
	$nombre = strtolower($nombre);
	$cantidadDeCaracteres = strlen($nombre);
	foreach ($personas as $persona) {
		$nombreEnServidor = substr($persona, 0,$cantidadDeCaracteres);
		if(stristr($nombre, $nombreEnServidor) !== false){
			if($sugerencia === ""){
				$sugerencia = $persona;
			}else{
				$sugerencia .= " , $persona";
			}
		}
	}
}
echo $sugerencia === "" ? "No fue encontrado " : $sugerencia;
?>