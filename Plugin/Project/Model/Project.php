<?php
class Project extends ProjectAppModel {
	var $name = 'Project';
/**
 * Display field
 *
 * @var string
 */
	var $displayField = 'name';
	
	protected $_displayFields = array(
		'id',
		'name',
		'description',
		'host',
	);

}
