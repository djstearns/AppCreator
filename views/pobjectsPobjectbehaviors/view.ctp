<div class="pobjectsPobjectbehaviors view">
<h2><?php  __('Pobjects Pobjectbehavior');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pobject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pobjectsPobjectbehavior['Pobject']['id'], array('controller' => 'pobjects', 'action' => 'view', $pobjectsPobjectbehavior['Pobject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pobjectbehavior'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pobjectsPobjectbehavior['Pobjectbehavior']['name'], array('controller' => 'pobjectbehaviors', 'action' => 'view', $pobjectsPobjectbehavior['Pobjectbehavior']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pobjects Pobjectbehavior', true), array('action' => 'edit', $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pobjects Pobjectbehavior', true), array('action' => 'delete', $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects Pobjectbehaviors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjects Pobjectbehavior', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
