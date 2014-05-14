<div class="pobjectbehaviors form">
<?php echo $this->Form->create('Pobjectbehavior');?>
	<fieldset>
		<legend><?php __('Edit Pobjectbehavior'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Pobject', array('data-placeholder'=>'Choose a Pobject...','class'=>'chosen-select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pobjectbehavior.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pobjectbehavior.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
	</ul>
</div>