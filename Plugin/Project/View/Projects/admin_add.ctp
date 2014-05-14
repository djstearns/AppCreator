<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Projects');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Projects'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Project']['name'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Projects: ' . $this->data['Project']['name'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Project');

?>
<div class="widgets row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Project'), '#project');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='project' class="tab-pane">
			<?php
				echo $this->Form->input('id', array('type'=>'hidden'));
				$this->Form->inputDefaults(array( 'class' => 'span10'));
				
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
            		echo $this->Form->input('user_id');
                    echo $this->Form->input('host');
                    echo $this->Form->input('key');
                ?>
            

			</div>
			<?php echo $this->Croogo->adminTabs(); ?>
		</div>

	</div>

	<div class="span4">
	<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'btn btn-danger')) .
			$this->Html->endBox();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>
