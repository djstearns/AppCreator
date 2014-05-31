<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Widgets');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Widgets'), array('action' => 'index'));

?>

<div class="widgets index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($widgets as $widget): ?>
	<tr>
		<td><?php echo h($widget['Widget']['id']); ?>&nbsp;</td>
		<td><?php echo h($widget['Widget']['name']); ?>&nbsp;</td>
		<td><?php echo h($widget['Widget']['created']); ?>&nbsp;</td>
		<td><?php echo h($widget['Widget']['modified']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $widget['Widget']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $widget['Widget']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $widget['Widget']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $widget['Widget']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
