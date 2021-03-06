<div class="audits view">
<h2><?php echo __('Audit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['event']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity Id'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['entity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Json Object'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['json_object']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source Id'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['source_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($audit['Audit']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Audit'), array('action' => 'edit', $audit['Audit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Audit'), array('action' => 'delete', $audit['Audit']['id']), null, __('Are you sure you want to delete # %s?', $audit['Audit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Audits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audit Deltas'), array('controller' => 'audit_deltas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audit Delta'), array('controller' => 'audit_deltas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Audit Deltas'); ?></h3>
	<?php if (!empty($audit['AuditDelta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Audit Id'); ?></th>
		<th><?php echo __('Property Name'); ?></th>
		<th><?php echo __('Old Value'); ?></th>
		<th><?php echo __('New Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($audit['AuditDelta'] as $auditDelta): ?>
		<tr>
			<td><?php echo $auditDelta['id']; ?></td>
			<td><?php echo $auditDelta['audit_id']; ?></td>
			<td><?php echo $auditDelta['property_name']; ?></td>
			<td><?php echo $auditDelta['old_value']; ?></td>
			<td><?php echo $auditDelta['new_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'audit_deltas', 'action' => 'view', $auditDelta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'audit_deltas', 'action' => 'edit', $auditDelta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'audit_deltas', 'action' => 'delete', $auditDelta['id']), null, __('Are you sure you want to delete # %s?', $auditDelta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Audit Delta'), array('controller' => 'audit_deltas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
