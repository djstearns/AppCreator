<div class="flds view">
<h2><?php  __('Fld');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fld['Fld']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pobject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($fld['Pobject']['id'], array('controller' => 'pobjects', 'action' => 'view', $fld['Pobject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fld['Fld']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ftype'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($fld['Ftype']['id'], array('controller' => 'ftypes', 'action' => 'view', $fld['Ftype']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Length'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fld['Fld']['length']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fld', true), array('action' => 'edit', $fld['Fld']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Fld', true), array('action' => 'delete', $fld['Fld']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fld['Fld']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flds', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fld', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ftypes', true), array('controller' => 'ftypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ftype', true), array('controller' => 'ftypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fldbehaviors', true), array('controller' => 'fldbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fldbehavior', true), array('controller' => 'fldbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Fldbehaviors');?></h3>
	<?php if (!empty($fld['Fldbehavior'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($fld['Fldbehavior'] as $fldbehavior):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $fldbehavior['id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'fldbehaviors', 'action' => 'view', $fldbehavior['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'fldbehaviors', 'action' => 'edit', $fldbehavior['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'fldbehaviors', 'action' => 'delete', $fldbehavior['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fldbehavior['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fldbehavior', true), array('controller' => 'fldbehaviors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
