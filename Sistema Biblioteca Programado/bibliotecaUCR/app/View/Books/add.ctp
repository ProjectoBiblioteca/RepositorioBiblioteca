<div class="form">

<?php 
	
	echo $this->Form->create('Book'); ?>
		<legend>Agregar Libro</legend>
<fieldset>
<?php
	echo $this->Form->input('ISBN');
	echo $this->Form->input('titulo' );
	echo $this->Form->input('descripcion' );
	echo $this->Form->input('precio' );
	echo $this->Form->input('location_id',array('label' => 'Lugares',
                                      'type' => 'select',
                                      'options' => $location
                                  ));
	echo $this->Form->input('materia_id',array(
                                      'type' => 'select',
                                      'options' => $materia
                                  ));
	echo $this->Form->input('editorial_id',array(
                                      'type' => 'select',
                                      'options' => $editorial
                                  ));

	echo $this->Form->end('Guardar Libro');

?>
</fieldset>
</div>
