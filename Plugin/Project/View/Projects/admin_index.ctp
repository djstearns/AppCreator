<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Projects');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Projects'), array('action' => 'index'));

?>

<div class="projects index">test
	 <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table table-striped">
	<tr>
		<th></th>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('host'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td>


<?php echo $this->Form->input($project['Project']['id'], array('type'=>'checkbox','label'=>false)); ?>

</td>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td>

<?php echo $this->Html->link($project['Project']['name'], '#', array('id'=>'name','data-url'=>'projects/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?>

</td>
		<td><?php echo h($project['Project']['description']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['host']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $project['Project']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $project['Project']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $project['Project']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->Form->end('Delete'); ?>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
</script>