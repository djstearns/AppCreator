<div class="fldbehaviors index">
	<h2><?php __('Fldbehaviors');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
	    	<th><?php echo 'Related Fld'.'s';?></th>		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($fldbehaviors as $fldbehavior):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($fldbehavior['Fldbehavior']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($fldbehavior['Fldbehavior']['id'], '#', array('id'=>'id','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fldbehavior['Fldbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>

				 <td> <?php $arr = array(); 
				 foreach($fldbehaviordata[$i-1]['Fld'] as $Fld){ $arr[] = $Fld['name']; }
					$str = implode(',',$arr); 
					echo $this->Html->link($str, '#', array( 'id'=>'Fld__name','data-url'=>'savehabtmfld', 'data-type'=>'select2', 'data-pk'=> $fldbehavior['Fldbehavior']['id'], 'class'=>'editable editable-click mclass-Fld', 'style'=>'display: inline;')); ?></td>
						<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $fldbehavior['Fldbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $fldbehavior['Fldbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $fldbehavior['Fldbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fldbehavior['Fldbehavior']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fldbehavior', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Flds', true), array('controller' => 'flds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fld', true), array('controller' => 'flds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
$('.mclass-Fld').editable({
						inputclass: 'input-large',
							select2: {
								tags: <?php echo $fldstr; ?>,
								tokenSeparators: [',', ' ']
							}
							});

</script>