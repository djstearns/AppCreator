<div class="pobjectsPobjectbehaviors form">
<?php echo $this->Form->create('PobjectsPobjectbehavior');?>
	<fieldset>
		<legend><?php __('Add Pobjects Pobjectbehavior'); ?></legend>
	<?php
		echo $this->Form->input('pobject_id');
		echo $this->Form->input('pobjectbehavior_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pobjects Pobjectbehaviors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>