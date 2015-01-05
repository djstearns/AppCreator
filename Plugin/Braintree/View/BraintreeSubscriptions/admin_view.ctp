<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Subscriptions'), h($braintreeSubscription['BraintreeSubscription']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Subscriptions'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Subscription'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Subscription'), array('action' => 'edit', $braintreeSubscription['BraintreeSubscription']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Subscription'), array('action' => 'delete', $braintreeSubscription['BraintreeSubscription']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeSubscription['BraintreeSubscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Subscriptions'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Subscription'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('controller' => 'braintree_credit_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('controller' => 'braintree_credit_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Customers'), array('controller' => 'braintree_customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Customer'), array('controller' => 'braintree_customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeSubscriptions view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeSubscription['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeSubscription['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeSubscription['BraintreeCustomer']['id'], array('controller' => 'braintree_customers', 'action' => 'view', $braintreeSubscription['BraintreeCustomer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Credit Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeSubscription['BraintreeCreditCard']['token'], array('controller' => 'braintree_credit_cards', 'action' => 'view', $braintreeSubscription['BraintreeCreditCard']['token'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Transaction Id'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['braintree_transaction_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Model'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Foreign Id'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['foreign_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Type'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Amount'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'PlanId'); ?></dt>
		<dd>
			<?php echo h($braintreeSubscription['BraintreeSubscription']['planId']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
