
<div class="form">

<?php 
	
	echo $this->Form->create('Student'); ?>
		<legend>Agregar Usuario</legend>
<fieldset>
<?php
	echo $this->Form->input('carnet');
	echo $this->Form->input('identidad' );
	echo $this->Form->input('nombre' );
	echo $this->Form->input('telefono' );
	echo $this->Form->input('direccion' );
	echo $this->Form->input('fecha_vencimiento');
	echo $this->Form->input('tipo_usuario_id',array(
                                      'type' => 'select',
                                      'options' => $tipousuario,
                                      'selected'=> 3
                                  ));

	echo $this->Form->end('Guardar Usuario');

?>
</fieldset>
</div>
