<?php
App::uses('AppController', 'Controller');
/**
 * Braintree App Controller File
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
 * @subpackage braintree.controllers
 * @copyright  2010 Anthony Putignano <anthonyp@xonatek.com>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/anthonyp/braintree
 */

/**
 * Braintree App Controller Class
 *
 * @package    braintree
 * @subpackage braintree.controllers
 */
//App::uses('Vendor', 'Braintree.Braintree');

App::import(
    'Vendor',
    'Braintree.braintree',
    array('file' => 'braintree' . DS . 'braintree.php')
);
class BraintreeAppController extends AppController {
	
	function beforeFilter(){
		
		parent::beforeFilter();
		$this->Security->csrfCheck = false;
		$this->Security->unlockedActions = array('admin_ccform');
		
		$merchant_id = 'zt3zqwt76hwjshff'; // the merchant ID you want to use  
		$braintree_configs = ClassRegistry::init('Braintree.BraintreeMerchant')->find('first', array(  
			 'conditions' => array(  
				  'BraintreeMerchant.id' => $merchant_id  
				  //'braintree_merchants.active' => 1
			 ),  
			 
		));
		
		
		BraintreeConfig::set(array(  
			'merchantId' => $merchant_id,  
			'publicKey' => $braintree_configs['BraintreeMerchant']['braintree_public_key'],  
			'privateKey' => $braintree_configs['BraintreeMerchant']['braintree_private_key'],
			'environment' => 'sandbox' //or 'production'
		)); 
		
		$user = $this->Auth->user();
		$braintree_customer_id = ClassRegistry::init('Braintree.BraintreeCustomer')->getOrCreateCustomerId(
				 'User', // A model in your app that you want to associate the Braintree customer with
				 1, // A foreign_id in your app that you want to associate the Braintree customer with
				 array(
					 'braintree_merchant_id'=>'zt3zqwt76hwjshff', 
					 'first_name' => $user['firstName'],
					 'last_name' =>  $user['lastName'],//$app_customer['last_name'],
					// 'company' =>  $user['company'],//$app_customer['company'],
					 'email' => $user['email'], //$app_customer['email'],
					 'phone' => $user['phone'], //$app_customer['phone'],
				 )
			 );
		

		
		 $this->set('user', $user);
		 $this->set('braintree_customer_id', $braintree_customer_id);
		
	}
}
?>