<div class="braintreeAddresses view">
<h2><?php echo __('Braintree Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Braintree Merchant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeAddress['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeAddress['BraintreeMerchant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Braintree Customer Id'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['braintree_customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unique Address Identifier'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['unique_address_identifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extended Address'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['extended_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locality'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['locality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code Alpha 2'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code Alpha 3'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code Numeric'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_code_numeric']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Name'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['country_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($braintreeAddress['BraintreeAddress']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Braintree Address'), array('action' => 'edit', $braintreeAddress['BraintreeAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Braintree Address'), array('action' => 'delete', $braintreeAddress['BraintreeAddress']['id']), null, __('Are you sure you want to delete # %s?', $braintreeAddress['BraintreeAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Braintree Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Braintree Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
	</ul>
</div>
