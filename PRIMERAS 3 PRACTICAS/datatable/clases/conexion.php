<?php
class conectar
{
	public function conexion($user,$contra)
	{
		$conexion = mysqli_connect("localhost",$user,$contra,"ejemplophp1");
		return $conexion;
	}
}
?>