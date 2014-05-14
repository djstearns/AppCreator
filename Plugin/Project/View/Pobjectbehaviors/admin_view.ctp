<div class="pobjectbehaviors view">
<h2><?php  __('Pobjectbehavior');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobjectbehavior['Pobjectbehavior']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pobjectbehavior['Pobjectbehavior']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pobjectbehavior', true), array('action' => 'edit', $pobjectbehavior['Pobjectbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pobjectbehavior', true), array('action' => 'delete', $pobjectbehavior['Pobjectbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobjectbehavior['Pobjectbehavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Pobjects');?></h3>
	<?php if (!empty($pobjectbehavior['Pobject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Tablename'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pobjectbehavior['Pobject'] as $pobject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pobject['id'];?></td>
			<td><?php echo $pobject['project_id'];?></td>
			<td><?php echo $pobject['tablename'];?></td>
			<td><?php echo $pobject['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pobjects', 'action' => 'view', $pobject['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pobjects', 'action' => 'edit', $pobject['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pobjects', 'action' => 'delete', $pobject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
