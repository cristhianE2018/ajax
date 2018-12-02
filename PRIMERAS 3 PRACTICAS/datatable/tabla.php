<?php
require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj -> conexion("root","");
$sql = "Select * from alumno";
$result = mysqli_query($conexion,$sql);
?>

<div>
	<table class="table table-hover table-condensed" id="iddatatable">
		<thead style="background-color: #dc3545; color: white; font-weight:bold;">
			<tr>
				<td> Matricula</td>
				<td> Nombre </td>
				<td> Sexo </td>
				<td> Anio </td>
				<td> Carrera </td>
				<td> Editar </td>
				<td> Eliminar </td>
			</tr>
		</thead>
		<tfoot style="background-color: #dc3545; color: white; font-weight:bold;">
			<tr>
				<td> Matricula</td>
				<td> Nombre </td>
				<td> Sexo </td>
				<td> Anio </td>
				<td> Carrera </td>
				<td> Editar </td>
				<td> Eliminar </td>
			</tr>
		</tfoot>
		<tbody>
		<?php 
			while ($mostrar=mysqli_fetch_row($result)){
		 ?>
			<tr>
				<td><?php echo $mostrar[0] ?> </td>
				<td> <?php echo $mostrar[1] ?> </td>
				<td> <?php echo $mostrar[2] ?></td>
				<td> <?php echo $mostrar[3] ?> </td>
				<td> <?php echo $mostrar[4] ?></td>
				<td> <?php echo ("<a href='#'> Editar </a>"); ?></td>
				<td> <?php echo ("<a href='eliminar.php?clave=$mostrar[0]'> Eliminar </a>"); ?></td>
			</tr>
			<?php
		}
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#iddatatable').DataTable();
} );
</script>