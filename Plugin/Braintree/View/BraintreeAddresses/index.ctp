<div class="braintreeAddresses index">
	<h2><?php echo __('Braintree Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('braintree_merchant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('braintree_customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unique_address_identifier'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('company'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('extended_address'); ?></th>
			<th><?php echo $this->Paginator->sort('locality'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code_alpha_2'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code_alpha_3'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code_numeric'); ?></th>
			<th><?php echo $this->Paginator->sort('country_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($braintreeAddresses as $braintreeAddress): ?>
	<tr>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($braintreeAddress['BraintreeMerchant']['id'], array('controller' => 'braintree_merchants', 'action' => 'view', $braintreeAddress['BraintreeMerchant']['id'])); ?>
		</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['braintree_customer_id']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['unique_address_identifier']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['company']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['extended_address']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['locality']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['region']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_2']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['country_code_alpha_3']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['country_code_numeric']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['country_name']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['created']); ?>&nbsp;</td>
		<td><?php echo h($braintreeAddress['BraintreeAddress']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $braintreeAddress['BraintreeAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $braintreeAddress['BraintreeAddress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $braintreeAddress['BraintreeAddress']['id']), null, __('Are you sure you want to delete # %s?', $braintreeAddress['BraintreeAddress']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Braintree Address'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Braintree Merchants'), array('controller' => 'braintree_merchants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Braintree Merchant'), array('controller' => 'braintree_merchants', 'action' => 'add')); ?> </li>
	</ul>
</div>
