<?php
/**
 * CVV Helper View File
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
 * @subpackage braintree.views
 * @copyright  2010 Anthony Putignano <anthonyp@xonatek.com>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/anthonyp/braintree
 */

?>
<?php 

echo $this->Html->script(array(
			'https://js.braintreegateway.com/v2/braintree.js'
		));
?>
<?php 
	
 App::import(
    'Vendor',
    'Braintree.braintree',
    array('file' => 'braintree' . DS . 'braintree.php')
);

		$merchant_id = 'zt3zqwt76hwjshff'; // the merchant ID you want to use  
		$braintree_configs = ClassRegistry::init('Braintree.BraintreeMerchant')->find('first', array(  
			 'conditions' => array(  
				  'BraintreeMerchant.id' => $merchant_id  
			 ),  
			 'contain' => false  
		));
BraintreeConfig::set(array(  
			'merchantId' => $merchant_id,  
			'publicKey' => $braintree_configs['BraintreeMerchant']['braintree_public_key'],  
			'privateKey' => $braintree_configs['BraintreeMerchant']['braintree_private_key'],
			'environment' => 'sandbox' //or 'production'
		)); 	
	
$user = ClassRegistry::init('Braintree.BraintreeCustomer')->getUser();


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
	 
$clientToken = Braintree_ClientToken::generate(array(
			"customerId" => $braintree_customer_id
		));
		

/*
$clientToken = Braintree_ClientToken::generate(array(
			"customerId" => $braintree_customer_id
		));
*/		
$user = Configure::read('Braintree.user'); 
echo $this->Form->create(null, array('url' => array('plugin'=>'braintree', 'controller' => 'interfaces', 'action' => 'ccform')));
echo $this->Form->input('BraintreeCustomer.firstName', array('value'=>$user['firstName']));
echo $this->Form->input('BraintreeCustomer.lastName', array('value'=>$user['lastName']));
echo $this->Form->input('BraintreeCustomer.phone', array('value'=>$user['phone']));
echo $this->Form->input('BraintreeCustomer.id', array('value'=>$braintree_customer_id));
?>
 <div id="dropin"></div>
<?php //echo $this->Form->submit(); ?>



<script type="text/javascript">

braintree.setup("<?php echo $clientToken; ?>", 'dropin', {
  container: 'dropin'
});

</script>
