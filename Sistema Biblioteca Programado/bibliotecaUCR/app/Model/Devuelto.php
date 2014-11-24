<?php
class Devuelto extends AppModel{

	var $belongsTo= array(
		'Student' => array('className'=> 'Student',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'student_id'),
		'Book' => array('className'=> 'Book',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'book_id')
		);
}
?>