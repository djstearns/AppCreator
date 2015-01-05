<?php

App::uses('CakeEventListener', 'Event');

/**
 * Facebook Event Handler
 *
 * @category Event
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class BraintreeEventHandler extends Object implements CakeEventListener {

/**
 * implementedEvents
 *
 * @return array
 */
	public function implementedEvents() {
		return array(
			/*
			'Controller.Users.adminLoginSuccessful' => array(
				'callable' => 'onAdminLoginSuccessful',
			),
			*/
			'Controller.Users.adminUserEdit' => array(
				'callable' => 'syncUserInfo',
			),
			'Controller.Users.adminUserAdd' => array(
				'callable' => 'syncUserInfo',
			),
			'Helper.Layout.beforeFilter' => array(
				'callable' => 'onLayoutBeforeFilter',
			),
			'Helper.Layout.afterFilter' => array(
				'callable' => 'onLayoutAfterFilter',
			),
		);
	}
	
	public function adminUserAdd($event){
		$Controller = $event->subject();
		//$message = sprintf('Welcome %s.  Have a nice day', $Controller->Auth->user('name'));
		//$Controller->Session->setFlash($message);
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
				//$this->redirect(array('action' => 'ccform'));
			}
		}
		
		/*
		$Controller->redirect(array(
			'admin' => true,
			'plugin' => 'project',
			'controller' => 'project',
			'action' => 'index',
		));
		*/
	}
	
	public function adminUserEdit($event){
		$Controller = $event->subject();
		//$message = sprintf('Welcome %s.  Have a nice day', $Controller->Auth->user('name'));
		//$Controller->Session->setFlash($message);
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
				//$this->redirect(array('action' => 'ccform'));
			}
		}
		
		/*
		$Controller->redirect(array(
			'admin' => true,
			'plugin' => 'project',
			'controller' => 'project',
			'action' => 'index',
		));
		*/
	}

/**
 * onLayoutBeforeFilter
 *
 * @param CakeEvent $event
 * @return void
 */
	public function onLayoutBeforeFilter($event) {
		$search = 'This is the content of your block.';
		$event->data['content'] = str_replace(
			$search,
			'<p style="font-size: 16px; color: green">' . $search . '</p>',
			$event->data['content']
		);
	}

/**
 * onLayoutAfterFilter
 *
 * @param CakeEvent $event
 * @return void
 */
	public function onLayoutAfterFilter($event) {
		if (strpos($event->data['content'], 'This is') !== false) {
			$event->data['content'] .= '<blockquote>This is added by FacebookEventHandler::onLayoutAfterFilter()</blockquote>';
		}
	}
	
	public function syncUserInfo(){
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
	}

}
