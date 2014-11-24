<div class="index"></div>

<h1>Listado de Prestamos</h1>

<table>
	<tr>
		<th>Id</th>
<th>Libro</th>
<th>Estudiante</th>
<th>Fecha Prestamo</th>
<th>Accion</th>

</tr>
<?php foreach ($prestamos as $key => $prestamo) :?>

<tr>
<td> <?php echo   $prestamo['Prestamo']['id'];?>  </td>

<td> <?php echo   $prestamo['Book']['titulo'];?>  </td>
<td> <?php echo   $prestamo['Student']['nombre']; ?>  </td>
<td> <?php echo   $prestamo['Prestamo']['created']; ?>  </td>

<td> <?php echo  $this->Html->link('Devolver',array('action'=>'edit',$prestamo['Prestamo']['id'])); ?> 
	
</td>

</tr>
<?php endforeach;?>
</table>
<?php echo $this->Html->link('Agregar Nuevo Prestamo', array('action' => 'add' )); ?>