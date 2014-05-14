<div class="pobjectbehaviors index">
	<h2><?php __('Pobjectbehaviors');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
	    	<th><?php echo 'Related Pobject'.'s';?></th>		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pobjectbehaviors as $pobjectbehavior):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($pobjectbehavior['Pobjectbehavior']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($pobjectbehavior['Pobjectbehavior']['id'], '#', array('id'=>'id','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobjectbehavior['Pobjectbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($pobjectbehavior['Pobjectbehavior']['name'], '#', array('id'=>'name','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $pobjectbehavior['Pobjectbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>

				 <td> <?php $arr = array(); 
				 foreach($pobjectbehaviordata[$i-1]['Pobject'] as $Pobject){ $arr[] = $Pobject['id']; }
					$str = implode(',',$arr); 
					echo $this->Html->link($str, '#', array( 'id'=>'Pobject__id','data-url'=>'savehabtmfld', 'data-type'=>'select2', 'data-pk'=> $pobjectbehavior['Pobjectbehavior']['id'], 'class'=>'editable editable-click mclass-Pobject', 'style'=>'display: inline;')); ?></td>
						<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pobjectbehavior['Pobjectbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pobjectbehavior['Pobjectbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pobjectbehavior['Pobjectbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pobjectbehavior['Pobjectbehavior']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pobjectbehavior', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
$('.mclass-Pobject').editable({
						inputclass: 'input-large',
							select2: {
								tags: <?php echo $pobjectstr; ?>,
								tokenSeparators: [',', ' ']
							}
							});

</script>