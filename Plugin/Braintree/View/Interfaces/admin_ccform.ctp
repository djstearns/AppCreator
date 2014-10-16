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


echo $this->Form->create(null, array('url' => array('plugin'=>'braintree', 'controller' => 'interfaces', 'action' => 'ccform')));
echo $this->Form->input('BraintreeCustomer.firstName', array('value'=>$user['firstName']));
echo $this->Form->input('BraintreeCustomer.lastName', array('value'=>$user['lastName']));
echo $this->Form->input('BraintreeCustomer.phone', array('value'=>$user['phone']));
echo $this->Form->input('BraintreeCustomer.id', array('value'=>$braintree_customer_id));
?>
 <div id="dropin"></div>
<?php echo $this->Form->submit(); ?>



<script type="text/javascript">

braintree.setup("<?php echo $clientToken; ?>", 'dropin', {
  container: 'dropin'
});

</script>
