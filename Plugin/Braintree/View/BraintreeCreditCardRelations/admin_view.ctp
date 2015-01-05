<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Braintree Credit Card Relations'), h($braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Credit Card Relations'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Braintree Credit Card Relation'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Braintree Credit Card Relation'), array('action' => 'edit', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Braintree Credit Card Relation'), array('action' => 'delete', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Card Relations'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card Relation'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Braintree Credit Cards'), array('controller' => 'braintree_credit_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Braintree Credit Card'), array('controller' => 'braintree_credit_cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="braintreeCreditCardRelations view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Braintree Credit Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCard']['token'], array('controller' => 'braintree_credit_cards', 'action' => 'view', $braintreeCreditCardRelation['BraintreeCreditCard']['token'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Model'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCardRelation['BraintreeCreditCardRelation']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Foreign Id'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCardRelation['BraintreeCreditCardRelation']['foreign_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($braintreeCreditCardRelation['BraintreeCreditCardRelation']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
