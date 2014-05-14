<div class="pobjects form">
<?php echo $this->Form->create('Pobject');?>
	<fieldset>
		<legend><?php __('Edit Pobject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('tablename');
		echo $this->Form->input('description');
		echo $this->Form->input('Pobjectbehavior', array('data-placeholder'=>'Choose a Pobjectbehavior...','class'=>'chosen-select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pobject.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pobject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>