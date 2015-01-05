<?php
/**
 * Pages Controller File
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
 * Pages Controller Class
 *
 * @package    braintree
 * @subpackage braintree.controllers
 */
App::import(
    'Vendor',
    'Braintree.braintree',
    array('file' => 'braintree' . DS . 'braintree.php')
);
class BraintreeSettingsController extends BraintreeAppController {

/**
 * Name
 *
 * @var string
 */
	public $name = 'BraintreeSettings';
	
/**
 * Uses
 *
 * @var array
 */
	public $uses = array();
	
	public $useTable = false;
	
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array();
	
	
	public $components = array(
		'RequestHandler',
		
	);
	
	

/**
 * beforeFilter
 *
 * @return	void
 */
	public function beforeFilter () {
		$this->Security->unlockedActions = array('admin_ccform');
		parent::beforeFilter();
		
        
    }

/**
 * Popup helper for identifying credit card security codes
 *
 * @return	void
 */
    public function cvv_helper () {
    	
    	$this->set('title_for_layout', __('CVV/CID', true));
    	
    	$this->layout = 'braintree_popup';
    	
    }
	
	public function admin_cvv_helper () {
    	
    	$this->set('title_for_layout', __('CVV/CID', true));
    	
    	$this->layout = 'braintree_popup';
    	
    }
	
	public function ccform(){
		
	}
	
	public function admin_index(){
	
	}
	
	
	function admin_ccform(){
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
		
		if(!empty($this->request->data)){
			$data = array('BraintreeCreditCard'=>array(
					
					'braintree_customer_id'=>$braintree_customer_id,
					'braintree_merchant_id'=>'zt3zqwt76hwjshff',
					'unique_card_identifier'=>$this->request->data['payment_method_nonce'],
					
				));
			
			$success = ClassRegistry::init('Braintree.BraintreeCreditCard')->save($data);
			
			if($success==true){
				$this->Session->setFlash(__d('croogo', 'Credit card added'), 'default', array('class' => 'success'));
				
			}else{
				$this->Session->setFlash(__d('croogo', 'Credit card could not be added.'), 'default', array('class' => 'error'));
				$this->redirect(array('action' => 'ccform'));
			}
		}
		
		$clientToken = Braintree_ClientToken::generate(array(
			"customerId" => $braintree_customer_id
		));
		 $this->set('clientToken', $clientToken);
	
		
		 $this->set('user', $user);
		 $this->set('braintree_customer_id', $braintree_customer_id);
		
		
		
	}

}
?>