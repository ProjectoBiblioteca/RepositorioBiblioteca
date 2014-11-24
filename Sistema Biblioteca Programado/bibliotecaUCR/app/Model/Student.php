<?php 
// la tabla en base de datos se llama students (minuscula y plural)
// las clases ejemplo Student (singular y em CamelCase)
class Student extends AppModel{

	var $name= 'Student';
  var $displayField='nombre';
	var $belongsTo = array('TipoUsuario' => array(
				'className'=> 'TipoUsuario',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'tipo_usuario_id'
				)

		);
   public $validate = array(
  	'carnet'=>array(
  		array(
  		'rule'=>'notEmpty',
  		'message'=>'El carnet no se puede ser vacio',
  		'required'=>true),
  		array(
  		'rule'=>'alphaNumeric',
  		'message'=>'El carnet solo acepta letra o numeros','required'=>true),
  		array(
  		'rule'=> array('minLength', 6),
  		'message'=>'El carnet debe ser de un minimos de 6 careteres','required'=>true),
  		array(
  		'rule'=> array('maxLength', 6),
  		'message'=>'El carnet debe ser de un maximo de 6 careteres','required'=>true)
  		),
  	'identidad'=>array(
  		array(
  		'rule'=>'notEmpty',
  		'message'=>'El identidad no se puede ser vacio','required'=>true),
  		array(
  		'rule'=>'numeric',
  		'message'=>'El identidad solo acepta numeros','required'=>true),
  		array(
  		'rule'=> array('minLength', 9),
  		'message'=>'El identidad debe ser de un minimos de 9 careteres','required'=>true),
  		array(
  		'rule'=> array('maxLength', 9),
  		'message'=>'El identidad debe ser de un maximo de 9 careteres','required'=>true)
  		),
  	'nombre'=>array(
  		array(
  		'rule'=>'notEmpty',
  		'message'=>'El identidad no se puede ser vacio','required'=>true),
  		array(
  		'rule'=> array('minLength', 4),
  		'message'=>'El identidad debe ser de un minimos de 4 careteres','required'=>true),
  		array(
  		'rule'=> array('maxLength', 50),
  		'message'=>'El identidad debe ser de un maximo de 50 careteres','required'=>true)
  		)
  	
  	);

}

?>