
<div class="form">

<?php 
	
	echo $this->Form->create('Ejemplar'); ?>
		<legend>Editar Ejemplar</legend>
<fieldset>
<?php
	echo $this->Form->input('cantidad');
	echo $this->Form->input('book_id',array(
                                      'type' => 'select',
                                      'options' => $book
                                  ) );
	echo $this->Form->end('Guardar Ejemplar');

?>
</fieldset>
</div>