<div class="flds index">
	<h2><?php __('Flds');?></h2>
    <?php print_r($flds); ?>
     <?php echo $this->Form->create(null, array('action'=>'deleteall')); ?>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
    <th></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pobject_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('ftype_id');?></th>
			<th><?php echo $this->Paginator->sort('length');?></th>
	    	<th><?php echo 'Related Fldbehavior'.'s';?></th>		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($flds as $fld):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td><?php echo $this->Form->input($fld['Fld']['id'], array('type'=>'checkbox','label'=>false)); ?></td>
		<td><?php echo $this->Html->link($fld['Fld']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($fld['Pobject']['tablename'], '#', array('id'=>'pobject_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click dclass-Pobject', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($fld['Fld']['name'], '#', array('id'=>'name','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($fld['Ftype']['name'], '#', array('id'=>'ftype_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click dclass-Ftype', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($fld['Fld']['length'], '#', array('id'=>'length','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;')); ?></td>

				 <td> <?php $arr = array(); 
				 foreach($flddata[$i-1]['Fldbehavior'] as $Fldbehavior){ $arr[] = $Fldbehavior['id']; }
					$str = implode(',',$arr); 
					echo $this->Html->link($str, '#', array( 'id'=>'Fldbehavior__id','data-url'=>'savehabtmfld', 'data-type'=>'select2', 'data-pk'=> $fld['Fld']['id'], 'class'=>'editable editable-click mclass-Fldbehavior', 'style'=>'display: inline;')); ?></td>
						<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $fld['Fld']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $fld['Fld']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $fld['Fld']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fld['Fld']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fld', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ftypes', true), array('controller' => 'ftypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ftype', true), array('controller' => 'ftypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fldbehaviors', true), array('controller' => 'fldbehaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fldbehavior', true), array('controller' => 'fldbehaviors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
$('.mclass-Fldbehavior').editable({
						inputclass: 'input-large',
							select2: {
								tags: <?php echo $fldbehaviorstr; ?>,
								tokenSeparators: [',', ' ']
							}
							});
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
 var Ftypeslist = [];
			$.each(<?php echo json_encode($ftypes); ?>, function(k, v) {
				Ftypeslist.push({id: k, text: v});
			}); 
			
			$('.dclass-Ftype').editable({
				source: Ftypeslist,
				select2: {
					width: 200,
					placeholder: 'Select Ftype',
					allowClear: true
				} 
			});
 
</script>