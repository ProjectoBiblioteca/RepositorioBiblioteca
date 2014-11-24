<?php

class Book extends AppModel{

	var $name = 'Book';
  var $displayField='titulo';
	var $belongsTo = array(
		'Editorial' => array(
				'className'=> 'Editorial',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'editorial_id'
				),
		'Materia' => array(
				'className'=> 'Materia',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'materia_id'
				),
		'Location' => array(
				'className'=> 'Location',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'location_id'
		  )
		);

	public $validate= array(
		'ISBN'=>array(
  		array(
  		'rule'=>'notEmpty',
  		'message'=>'El IBSN no se puede ser vacio',
  		'required'=>true),
  		array(
  		'rule'=>'numeric',
  		'message'=>'El IBSN solo acepta numeros','required'=>true),
  		array(
  		'rule'=> array('minLength', 8),
  		'message'=>'El IBSN debe ser de un minimos de 8 careteres','required'=>true),
  		array(
  		'rule'=> array('maxLength', 8),
  		'message'=>'El IBSN debe ser de un maximo de 8 careteres','required'=>true)
  		),
  		'titulo'=>array(
  		array(
  		'rule'=>'notEmpty',
  		'message'=>'El titulo no se puede ser vacio',
  		'required'=>true),
  		array(
  		'rule'=> array('minLength', 5),
  		'message'=>'El titulo debe ser de un minimos de 5 careteres','required'=>true),
  		array(
  		'rule'=> array('maxLength', 30),
  		'message'=>'El titulo debe ser de un maximo de 30 careteres','required'=>true)
  		)



		);
}

?>