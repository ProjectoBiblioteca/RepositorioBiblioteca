<div class="index"></div>

<h1>Listado de Usuarios </h1>

<table>
	<tr>
<th>Id</th>
<th>Carnet</th>
<th>Identificacion</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Creado</th>
<th>Vence</th>
<th>Tipo de Usuario</th>
<th>Acciones</th>

</tr>
<?php foreach ($students as $key => $student) :?>

<tr>
<td> <?php echo   $student['Student']['id'];?>  </td>
<td> <?php echo   $student['Student']['carnet']; ?>  </td>
<td> <?php echo   $student['Student']['identidad']; ?>  </td>
<td> <?php echo   $student['Student']['nombre'] ;?>  </td>
<td> <?php echo   $student['Student']['telefono']; ?>  </td>
<td> <?php echo   $student['Student']['direccion']; ?>  </td>
<td> <?php echo   $student['Student']['created']; ?>  </td>
<td> <?php echo   $student['Student']['fecha_vencimiento']; ?>  </td>
<td> <?php echo   $student['TipoUsuario']['tipo']; ?>  </td>
<td> <?php echo  $this->Html->link('Editar',array('action'=>'edit',$student['Student']['id'])); ?> 
	&nbsp;
	<?php echo  $this->Form->postLink('Borrar',array('action'=>'delete',$student['Student']['id']), array('confirm' => 'Esta seguro que desea eliminar a '. $student['Student']['nombre'] .'?')); ?> 
</td>

</tr>
<?php endforeach;?>





</table>
<?php echo $this->Html->link('Agregar Usuario', array('action' => 'add' )); ?>