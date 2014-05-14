<?php
class Pobjectbehavior extends ProjectAppModel {
	var $name = 'Pobjectbehavior';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Pobject' => array(
			'className' => 'Pobject',
			'joinTable' => 'pobjects_pobjectbehaviors',
			'foreignKey' => 'pobjectbehavior_id',
			'associationForeignKey' => 'pobject_id',
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