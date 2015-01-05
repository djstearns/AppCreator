<?php
class TheFirstBraintreeMigration extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
					'users' => array(
						'firstName' => array('type' => 'string', 'length'=>100, 'null' => false, 'default' => NULL),
						'lastName' => array('type' => 'string', 'length'=>100, 'null' => false, 'default' => NULL),
						'phone'	=> array('type' => 'string', 'length'=>100, 'null' => false, 'default' => NULL),
					),
				),
			'create_table' => array(
				'braintree_addresses' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 73, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_merchant_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_customer_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'unique_address_identifier' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'company' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'street_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'extended_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'locality' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'region' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'postal_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'country_code_alpha_2' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'country_code_alpha_3' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'country_code_numeric' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5),
					'country_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'braintree_local_customer_id' => array('column' => 'braintree_customer_id', 'unique' => 0),
						'unique_address_identifier' => array('column' => 'unique_address_identifier', 'unique' => 0),
						'created' => array('column' => 'created', 'unique' => 0),
						'braintree_merchant_id' => array('column' => 'braintree_merchant_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_credit_card_relations' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'braintree_credit_card_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'foreign_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'model_idx' => array('column' => array('model', 'foreign_id'), 'unique' => 1),
						'braintree_local_credit_card_idx' => array('column' => 'braintree_credit_card_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_credit_cards' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'token' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_merchant_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_customer_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_address_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 73, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'unique_card_identifier' => array('type' => 'string', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'cardholder_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'card_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'masked_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 19, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'expiration_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
					'is_default' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'key' => 'index'),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'token' => array('column' => 'token', 'unique' => 1),
						'customer_id' => array('column' => 'braintree_customer_id', 'unique' => 0),
						'unique_card_identifier' => array('column' => 'unique_card_identifier', 'unique' => 0),
						'created' => array('column' => 'created', 'unique' => 0),
						'braintree_merchant_id' => array('column' => 'braintree_merchant_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_customers' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_merchant_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'foreign_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'firstName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'lastName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'company' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'website' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'model_idx' => array('column' => array('model', 'foreign_id'), 'unique' => 0),
						'braintree_merchant_id' => array('column' => 'braintree_merchant_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_merchants' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_public_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_private_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_subscriptions' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 73, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_merchant_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_customer_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_credit_card_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_transaction_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 73, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'foreign_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'type' => array('type' => 'string', 'null' => false, 'default' => 'sale', 'length' => 16, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '9,2'),
					'status' => array('type' => 'string', 'null' => false, 'default' => 'submitted_for_settlement', 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'planId' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'braintree_local_credit_card_id' => array('column' => 'braintree_credit_card_id', 'unique' => 0),
						'braintree_local_customer_id' => array('column' => 'braintree_customer_id', 'unique' => 0),
						'type' => array('column' => 'type', 'unique' => 0),
						'braintree_transaction_id' => array('column' => 'braintree_transaction_id', 'unique' => 0),
						'braintree_merchant_id' => array('column' => 'braintree_merchant_id', 'unique' => 0),
						'model_idx' => array('column' => array('model', 'foreign_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'braintree_transactions' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 73, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_merchant_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_customer_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_credit_card_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'braintree_transaction_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 73, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'foreign_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'type' => array('type' => 'string', 'null' => false, 'default' => 'sale', 'length' => 16, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '9,2'),
					'status' => array('type' => 'string', 'null' => false, 'default' => 'submitted_for_settlement', 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'braintree_local_credit_card_id' => array('column' => 'braintree_credit_card_id', 'unique' => 0),
						'braintree_local_customer_id' => array('column' => 'braintree_customer_id', 'unique' => 0),
						'type' => array('column' => 'type', 'unique' => 0),
						'braintree_transaction_id' => array('column' => 'braintree_transaction_id', 'unique' => 0),
						'braintree_merchant_id' => array('column' => 'braintree_merchant_id', 'unique' => 0),
						'model_idx' => array('column' => array('model', 'foreign_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
				
			
		),
		'down' => array(
			'drop_table' => array(
				'braintree_addresses', 'braintree_credit_card_relations', 'braintree_credit_cards', 'braintree_customers', 'braintree_merchants', 'braintree_subscriptions', 'braintree_transactions'
			),
			
			
			
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
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
}
