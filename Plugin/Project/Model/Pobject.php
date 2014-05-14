<?php
class Pobject extends AppModel {
	var $name = 'Pobject';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $displayField = 'tablename';
	var $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Pobjectbehavior' => array(
			'className' => 'Pobjectbehavior',
			'joinTable' => 'pobjects_pobjectbehaviors',
			'foreignKey' => 'pobject_id',
			'associationForeignKey' => 'pobjectbehavior_id',
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