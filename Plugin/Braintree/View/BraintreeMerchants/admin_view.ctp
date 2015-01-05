<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Merchants'), h($braintreeMerchant['BraintreeMerchant']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Merchants'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Merchant'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Merchant'), array('action' => 'edit', $braintreeMerchant['BraintreeMerchant']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Merchant'), array('action' => 'delete', $braintreeMerchant['BraintreeMerchant']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeMerchant['BraintreeMerchant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Addresses'), array('controller' => 'braintree_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Address'), array('controller' => 'braintree_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('controller' => 'braintree_credit_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('controller' => 'braintree_credit_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Customers'), array('controller' => 'braintree_customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Customer'), array('controller' => 'braintree_customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Transactions'), array('controller' => 'braintree_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Transaction'), array('controller' => 'braintree_transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeMerchants view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeMerchant['BraintreeMerchant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Public Key'); ?></dt>
		<dd>
			<?php echo h($braintreeMerchant['BraintreeMerchant']['braintree_public_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Private Key'); ?></dt>
		<dd>
			<?php echo h($braintreeMerchant['BraintreeMerchant']['braintree_private_key']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
