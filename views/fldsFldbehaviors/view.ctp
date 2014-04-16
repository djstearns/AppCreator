<div class="fldsFldbehaviors view">
<h2><?php  __('Flds Fldbehavior');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fldsFldbehavior['FldsFldbehavior']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fldsFldbehavior['FldsFldbehavior']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flds Fldbehavior', true), array('action' => 'edit', $fldsFldbehavior['FldsFldbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Flds Fldbehavior', true), array('action' => 'delete', $fldsFldbehavior['FldsFldbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fldsFldbehavior['FldsFldbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flds Fldbehaviors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flds Fldbehavior', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
