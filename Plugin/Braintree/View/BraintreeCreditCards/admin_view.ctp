<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Credit Cards'), h($braintreeCreditCard['BraintreeCreditCard']['token']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Credit Cards'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Credit Card'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Credit Card'), array('action' => 'edit', $braintreeCreditCard['BraintreeCreditCard']['token']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Credit Card'), array('action' => 'delete', $braintreeCreditCard['BraintreeCreditCard']['token']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCreditCard['BraintreeCreditCard']['token'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Addresses'), array('controller' => 'braintree_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Address'), array('controller' => 'braintree_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Transactions'), array('controller' => 'braintree_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Transaction'), array('controller' => 'braintree_transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeCreditCards view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Token'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeCreditCard['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeCreditCard['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Customer Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['braintree_customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeCreditCard['BraintreeAddress']['id'], array('controller' => 'braintree_addresses', 'action' => 'view', $braintreeCreditCard['BraintreeAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Unique Card Identifier'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['unique_card_identifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Cardholder Name'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['cardholder_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Card Type'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['card_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Masked Number'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['masked_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Expiration Date'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['expiration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Is Default'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['is_default']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCard['BraintreeCreditCard']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
