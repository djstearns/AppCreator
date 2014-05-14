<?php
class Fld extends ProjectAppModel {
	var $name = 'Fld';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Pobject' => array(
			'className' => 'Pobject',
			'foreignKey' => 'pobject_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ftype' => array(
			'className' => 'Ftype',
			'foreignKey' => 'ftype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Fldbehavior' => array(
			'className' => 'Fldbehavior',
			'joinTable' => 'flds_fldbehaviors',
			'foreignKey' => 'fld_id',
			'associationForeignKey' => 'fldbehavior_id',
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