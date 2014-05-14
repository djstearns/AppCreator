<div class="Projects index">
	
	<h2><?php __('Projects');?></h2>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
    
    <th>	<?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			
			<th><?php echo $this->Paginator->sort('host');?></th>
			<th><?php echo $this->Paginator->sort('key');?></th>

    		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $Project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Form->input($Project['Project']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($Project['Project']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $Project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		
		<td><?php echo $this->Html->link($Project['Project']['name'], '#', array('id'=>'tablename','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $Project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($Project['Project']['description'], '#', array('id'=>'description','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $Project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
       
        <td><?php echo $this->Html->link($Project['Project']['host'], '#', array('id'=>'description','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $Project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
 	<td><?php echo $this->Html->link($Project['Project']['key'], '#', array('id'=>'description','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $Project['Project']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>

						<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $Project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $Project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $Project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $Project['Project']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();

</script>