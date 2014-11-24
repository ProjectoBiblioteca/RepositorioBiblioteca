<div class="index"></div>

<h1>Listado de Ejemplares</h1>

<table>
	<tr>
<th>Id</th>
<th>Titulo</th>
<th>Inventario</th>
<th>Accion</th>

</tr>
<?php foreach ($ejemplars as $key => $ejemplar) :?>

<tr>
<td> <?php echo   $ejemplar['Ejemplar']['id'];?>  </td>
<td> <?php echo   $ejemplar['Book']['titulo']; ?>  </td>
<td> <?php echo   $ejemplar['Ejemplar']['cantidad'];?>  </td>



<td> <?php echo  $this->Html->link('Editar',array('action'=>'edit',$ejemplar['Ejemplar']['id'])); ?> 
	
</td>

</tr>
<?php endforeach;?>

<?php echo $this->Html->link('Agregar Ejemplares', array('action' => 'add' )); ?>



</table>