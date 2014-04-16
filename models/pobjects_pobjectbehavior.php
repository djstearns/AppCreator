<?php
class PobjectsPobjectbehavior extends AppModel {
	var $name = 'PobjectsPobjectbehavior';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Pobject' => array(
			'className' => 'Pobject',
			'foreignKey' => 'pobject_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pobjectbehavior' => array(
			'className' => 'Pobjectbehavior',
			'foreignKey' => 'pobjectbehavior_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>