<div class="index"></div>

<h1>Listado de Libros</h1>

<table>
	<tr>
		<th>Id</th>
<th>ISBN</th>
<th>Titulo</th>
<th>Descripcion</th>
<th>Precio</th>
<th>Materia</th>
<th>Localizacion</th>
<th>Editorial</th>
<th>Acciones</th>

</tr>
<?php foreach ($books as $key => $book) :?>

<tr>
<td> <?php echo   $book['Book']['id'];?>  </td>

<td> <?php echo   $book['Book']['ISBN'];?>  </td>
<td> <?php echo   $book['Book']['titulo']; ?>  </td>
<td> <?php echo   $book['Book']['descripcion']; ?>  </td>
<td> <?php echo   $book['Book']['precio'] ;?>  </td>
<td> <?php echo   $book['Materia']['materia']; ?>  </td>
<td> <?php echo   $book['Location']['lugar']; ?>  </td>
<td> <?php echo   $book['Editorial']['editorial']; ?>  </td>

<td> <?php echo  $this->Html->link('Editar',array('action'=>'edit',$book['Book']['id'])); ?> 
	&nbsp;
	<?php echo  $this->Form->postLink('Borrar',array('action'=>'delete',$book['Book']['id']), array('confirm' => 'Esta seguro que desea eliminar el libro '. $book['Book']['titulo'] .'?')); ?> 
</td>

</tr>
<?php endforeach;?>


</table>
<?php echo $this->Html->link('Agregar Libro', array('action' => 'add' )); ?>