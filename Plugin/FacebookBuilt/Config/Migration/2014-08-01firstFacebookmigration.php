<?php

class FacebookMigration extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		if ($direction === 'down') {
			return false;
		}
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
public $migration = array(
			'up' => array(
				'create_table' => array(),
			),
			'down' => array(
				'drop_table' => array(
				),
			),
		);}