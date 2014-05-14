<div class="flds form">
<?php echo $this->Form->create('Fld');?>
	<fieldset>
		<legend><?php __('Edit Fld'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pobject_id');
		echo $this->Form->input('name');
		echo $this->Form->input('ftype_id');
		echo $this->Form->input('length');
		echo $this->Form->input('Fldbehavior', array('data-placeholder'=>'Choose a Fldbehavior...','class'=>'chosen-select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Fld.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Fld.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flds', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ftypes', true), array('controller' => 'ftypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ftype', true), array('controller' => 'ftypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fldbehaviors', true), array('controller' => 'fldbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fldbehavior', true), array('controller' => 'fldbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>