<?php

class Ejemplar extends AppModel{

	var $name = 'Book';
	var $belongsTo = array(
		'Book'=>array(
			'className'=> 'Book',
				'conditions'=>'',
				'order' => '',
				'foreignKey' => 'book_id'

			)

		);