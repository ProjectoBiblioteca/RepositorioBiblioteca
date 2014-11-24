


<div class="form">

<?php 
	
	echo $this->Form->create('Prestamo'); ?>
		<legend>Realizar Prestamo Libro</legend>
<fieldset>
<?php
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->input('book_id',array('label' => 'Libros',
                                      'type' => 'select',
                                      'options' => $book
                                  ));
	echo $this->Form->input('student_id',array('label' => 'Estudiantes',
                                      'type' => 'select',
                                      'options' => $student
                                  ));
	echo $this->Form->input('devuelto',array('label' => 'Devolver'
										));

	echo $this->Form->end('Generar Devolucion');

?>
</fieldset>
</div>
