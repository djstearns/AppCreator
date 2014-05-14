<div class="pobjects view">
<h2><?php  __('Pobject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobject['Pobject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pobject['Project']['name'], array('controller' => 'projects', 'action' => 'view', $pobject['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tablename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobject['Pobject']['tablename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobject['Pobject']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pobject', true), array('action' => 'edit', $pobject['Pobject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pobject', true), array('action' => 'delete', $pobject['Pobject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobject['Pobject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Pobjectbehaviors');?></h3>
	<?php if (!empty($pobject['Pobjectbehavior'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pobject['Pobjectbehavior'] as $pobjectbehavior):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pobjectbehavior['id'];?></td>
			<td><?php echo $pobjectbehavior['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pobjectbehaviors', 'action' => 'view', $pobjectbehavior['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pobjectbehaviors', 'action' => 'edit', $pobjectbehavior['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pobjectbehaviors', 'action' => 'delete', $pobjectbehavior['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobjectbehavior['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
