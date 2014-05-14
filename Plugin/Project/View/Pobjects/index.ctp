<div class="pobjects index">
	
	<h2><?php __('Pobjects');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('tablename');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
	    	<th><?php echo 'Related Pobjectbehavior'.'s';?></th>		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pobjects as $pobject):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($pobject['Pobject']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($pobject['Pobject']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobject['Pobject']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobject['Project']['id'], '#', array('id'=>'project_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $pobject['Pobject']['id'], 'class'=>'editable editable-click dclass-Project', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobject['Pobject']['tablename'], '#', array('id'=>'tablename','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobject['Pobject']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobject['Pobject']['description'], '#', array('id'=>'description','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobject['Pobject']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>

				 <td> <?php $arr = array(); 
				 foreach($pobjectdata[$i-1]['Pobjectbehavior'] as $Pobjectbehavior){ $arr[] = $Pobjectbehavior['name']; }
					$str = implode(',',$arr); 
					echo $this->Html->link($str, '#', array( 'id'=>'Pobjectbehavior__name','data-url'=>'savehabtmfld', 'data-type'=>'select2', 'data-pk'=> $pobject['Pobject']['id'], 'class'=>'editable editable-click mclass-Pobjectbehavior', 'style'=>'display: inline;')); ?></td>
						<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pobject['Pobject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pobject['Pobject']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pobject['Pobject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobject['Pobject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pobject', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjectbehaviors', true), array('controller' => 'pobjectbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('controller' => 'pobjectbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
$('.mclass-Pobjectbehavior').editable({
						inputclass: 'input-large',
							select2: {
								tags: <?php echo $pobjectbehaviorstr; ?>,
								tokenSeparators: [',', ' ']
							}
							});
var Projectslist = [];
			$.each(<?php echo json_encode($projects); ?>, function(k, v) {
				Projectslist.push({id: k, text: v});
			}); 
			
			$('.dclass-Project').editable({
				source: Projectslist,
				select2: {
					width: 200,
					placeholder: 'Select Project',
					allowClear: true
				} 
			});
 
</script>