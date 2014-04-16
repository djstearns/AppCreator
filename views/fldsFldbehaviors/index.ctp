<div class="fldsFldbehaviors index">
	<h2><?php __('Flds Fldbehaviors');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
	    			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($fldsFldbehaviors as $fldsFldbehavior):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($fldsFldbehavior['FldsFldbehavior']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($fldsFldbehavior['FldsFldbehavior']['id'], '#', array('id'=>'id','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fldsFldbehavior['FldsFldbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($fldsFldbehavior['FldsFldbehavior']['name'], '#', array('id'=>'name','data-url'=>'editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fldsFldbehavior['FldsFldbehavior']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $fldsFldbehavior['FldsFldbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $fldsFldbehavior['FldsFldbehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $fldsFldbehavior['FldsFldbehavior']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fldsFldbehavior['FldsFldbehavior']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Flds Fldbehavior', true), array('action' => 'add')); ?></li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();

</script>