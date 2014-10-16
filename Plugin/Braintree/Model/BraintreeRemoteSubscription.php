<?php
/**
 * BraintreeRemoteSubscription Model File
 *
 * Copyright (c) 2010 Anthony Putignano
 *
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * PHP version 5.2
 * CakePHP version 1.3
 *
 * @package    braintree
 * @subpackage braintree.models
 * @copyright  2010 Anthony Putignano <anthonyp@xonatek.com>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/anthonyp/braintree
 */

/**
 * BraintreeRemoteTransaction Model Class
 *
 * @package    braintree
 * @subpackage braintree.models
 */
class BraintreeRemoteSubscription extends BraintreeAppModel {

/**
 * Name of model
 *
 * @var string
 */
	public $name = 'BraintreeRemoteSubscription';
	
/**
 * Schema
 *
 * @var array
 */
	public $_schema = array(
		'id' => array('type' => 'string', 'length' => '36'),
		'payment_method_token' => array('type' => 'string', 'length' => '36'),
		'planId' => array('type' => 'string', 'length' => '255'),
	);

/**
 * useTable
 *
 * @var string
 */
	public $useTable = false;
	
/**
 * Name of datasource config to use
 *
 * @var string
 */
	public $useDbConfig = 'braintree';
	
/**
 * Construct
 *
 * @return	void
 */
	public function __construct () {
		return parent::__construct();
		
	}
	
	public function save($remote_data){
		$result = Braintree_Subscription::create($remote_data);
		return $result;
	}
	
}
?>