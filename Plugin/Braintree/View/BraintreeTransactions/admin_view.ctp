<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Transactions'), h($braintreeTransaction['BraintreeTransaction']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Transactions'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Transaction'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Transaction'), array('action' => 'edit', $braintreeTransaction['BraintreeTransaction']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Transaction'), array('action' => 'delete', $braintreeTransaction['BraintreeTransaction']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeTransaction['BraintreeTransaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Transactions'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Transaction'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('controller' => 'braintree_credit_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('controller' => 'braintree_credit_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Customers'), array('controller' => 'braintree_customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Customer'), array('controller' => 'braintree_customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeTransactions view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeTransaction['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeTransaction['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeTransaction['BraintreeCustomer']['id'], array('controller' => 'braintree_customers', 'action' => 'view', $braintreeTransaction['BraintreeCustomer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Credit Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeTransaction['BraintreeCreditCard']['token'], array('controller' => 'braintree_credit_cards', 'action' => 'view', $braintreeTransaction['BraintreeCreditCard']['token'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Transaction Id'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['braintree_transaction_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Model'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Foreign Id'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['foreign_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Type'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Amount'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeTransaction['BraintreeTransaction']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
