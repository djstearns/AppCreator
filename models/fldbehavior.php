<?php
class Fldbehavior extends AppModel {
	var $name = 'Fldbehavior';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Fld' => array(
			'className' => 'Fld',
			'joinTable' => 'flds_fldbehaviors',
			'foreignKey' => 'fldbehavior_id',
			'associationForeignKey' => 'fld_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>