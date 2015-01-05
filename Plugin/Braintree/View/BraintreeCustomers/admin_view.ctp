<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Customers'), h($braintreeCustomer['BraintreeCustomer']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Customers'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Customer'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Customer'), array('action' => 'edit', $braintreeCustomer['BraintreeCustomer']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Customer'), array('action' => 'delete', $braintreeCustomer['BraintreeCustomer']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCustomer['BraintreeCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Customers'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Customer'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('controller' => 'braintree_credit_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('controller' => 'braintree_credit_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Addresses'), array('controller' => 'braintree_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Address'), array('controller' => 'braintree_addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeCustomers view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeCustomer['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeCustomer['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Model'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Foreign Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['foreign_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'FirstName'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['firstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'LastName'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['lastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Company'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Email'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Phone'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Fax'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Website'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeCustomer['BraintreeCustomer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
