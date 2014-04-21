<div class="projects index">
	<h2><?php __('Projects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('host');?></th>
			<th><?php echo $this->Paginator->sort('key');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $project['Project']['id']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['name']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['description']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['name'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td><?php echo $project['Project']['host']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['key']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['created']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
            <?php echo $this->Html->link(__('Download', true), array('action' => 'makeapp', $project['Project']['id'])); ?>
             
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
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
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pobjects', true), array('controller' => 'pobjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pobject', true), array('controller' => 'pobjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
function getHasChanges() {
    var hasChanges = false;

    $(":input:not(:button):not([type=hidden])").each(function () {
        if ((this.type == "text" || this.type == "textarea" || this.type == "hidden") && this.defaultValue != this.value) {
            hasChanges = true;
            return false;             }
        else {
            if ((this.type == "radio" || this.type == "checkbox") && this.defaultChecked != this.checked) {
                hasChanges = true;
                return false;                 }
            else {
                if ((this.type == "select-one" || this.type == "select-multiple")) {
                    for (var x = 0; x < this.length; x++) {
                        if (this.options[x].selected != this.options[x].defaultSelected) {
                            hasChanges = true;
                            return false;
                        }
                    }
                }
            }
        }
    });
	alert('haschanges');
    return hasChanges;
}

function acceptChanges() {
    $(":input:not(:button):not([type=hidden])").each(function () {
        if (this.type == "text" || this.type == "textarea" || this.type == "hidden") {
            this.defaultValue = this.value;
        }
        if (this.type == "radio" || this.type == "checkbox") {
            this.defaultChecked = this.checked;
        }
        if (this.type == "select-one" || this.type == "select-multiple") {
            for (var x = 0; x < this.length; x++) {
                this.options[x].defaultSelected = this.options[x].selected
            }
        }
    });
}
</script>