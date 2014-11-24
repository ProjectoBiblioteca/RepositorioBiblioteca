<div class="index"></div>

<h1>Listado de Devoluciones</h1>

<table>
	<tr>
		<th>Id</th>
<th>Libro</th>
<th>Estudiante</th>
<th>Fecha de prestamo</th>
<th>Fecha de devolucion</th>

</tr>
<?php foreach ($devueltos as $key => $devuelto) :?>

<tr>
<td> <?php echo   $devuelto['Devuelto']['id'];?>  </td>
<td> <?php echo   $devuelto['Book']['titulo'];?>  </td>
<td> <?php echo   $devuelto['Student']['nombre']; ?>  </td>
<td> <?php echo   $devuelto['Devuelto']['prestado']; ?>  </td>
<td> <?php echo   $devuelto['Devuelto']['devuelto']; ?>  </td>


</tr>
<?php endforeach;?>
</table>