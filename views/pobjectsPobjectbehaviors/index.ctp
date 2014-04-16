<div class="pobjectsPobjectbehaviors index">
	<h2><?php __('Pobjects Pobjectbehaviors');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pobject_id');?></th>
			<th><?php echo $this->Paginator->sort('pobjectbehavior_id');?></th>
	    			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pobjectsPobjectbehaviors as $pobjectsPobjectbehavior):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'], '#', array('id'=>'id','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobjectsPobjectbehavior['Pobject']['id'], '#', array('id'=>'pobject_id','data-url'=>'editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'], 'class'=>'editable editable-click dclass-Pobject', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobjectsPobjectbehavior['Pobjectbehavior']['id'], '#', array('id'=>'pobjectbehavior_id','data-url'=>'editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'], 'class'=>'editable editable-click dclass-Pobjectbehavior', 'style'=>'display: inline;')); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobjectsPobjectbehavior['PobjectsPobjectbehavior']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php echo $this->Form->end('Delete'); ?>	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pobjects Pobjectbehavior', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
var Pobjectslist = [];
			$.each(<?php echo json_encode($pobjects); ?>, function(k, v) {
				Pobjectslist.push({id: k, text: v});
			}); 
			
			$('.dclass-Pobject').editable({
				source: Pobjectslist,
				select2: {
					width: 200,
					placeholder: 'Select Pobject',
					allowClear: true
				} 
			});
 var Pobjectbehaviorslist = [];
			$.each(<?php echo json_encode($pobjectbehaviors); ?>, function(k, v) {
				Pobjectbehaviorslist.push({id: k, text: v});
			}); 
			
			$('.dclass-Pobjectbehavior').editable({
				source: Pobjectbehaviorslist,
				select2: {
					width: 200,
					placeholder: 'Select Pobjectbehavior',
					allowClear: true
				} 
			});
 
</script>