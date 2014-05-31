<?php
App::uses('ProjectAppModel', 'Project.Model');
/**
 * Fld Model
 *
 * @property Pobject $Pobject
 * @property Ftype $Ftype
 * @property Fldbehavior $Fldbehavior
 */
class Fld extends ProjectAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pobject_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ftype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Fldbehavior' => array(
			'className' => 'Fldbehavior',
			'joinTable' => 'flds_fldbehaviors',
			'foreignKey' => 'fld_id',
			'associationForeignKey' => 'fldbehavior_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
