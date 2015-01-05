<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Addresses'), h($braintreeAddress['BraintreeAddress']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Addresses'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Address'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Address'), array('action' => 'edit', $braintreeAddress['BraintreeAddress']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Address'), array('action' => 'delete', $braintreeAddress['BraintreeAddress']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeAddress['BraintreeAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Addresses'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Address'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeAddresses view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeAddress['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeAddress['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Customer Id'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['braintree_customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Unique Address Identifier'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['unique_address_identifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'First Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Last Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Company'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Street Address'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Extended Address'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['extended_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Locality'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['locality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Region'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Postal Code'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Country Code Alpha 2'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Country Code Alpha 3'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Country Code Numeric'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_numeric']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Country Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
