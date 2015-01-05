<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Customers');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Customers'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['BraintreeCustomer']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Braintree Customers: ' . $this->data['BraintreeCustomer']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('BraintreeCustomer');

?>
<div class="braintreeCustomers row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Braintree Customer'), '#braintree-customer');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='braintree-customer' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('braintree_merchant_id', array(
					'label' => 'Braintree Merchant Id',
				));
				echo $this->Form->input('model', array(
					'label' => 'Model',
				));
				echo $this->Form->input('foreign_id', array(
					'label' => 'Foreign Id',
				));
				echo $this->Form->input('firstName', array(
					'label' => 'FirstName',
				));
				echo $this->Form->input('lastName', array(
					'label' => 'LastName',
				));
				echo $this->Form->input('company', array(
					'label' => 'Company',
				));
				echo $this->Form->input('email', array(
					'label' => 'Email',
				));
				echo $this->Form->input('phone', array(
					'label' => 'Phone',
				));
				echo $this->Form->input('fax', array(
					'label' => 'Fax',
				));
				echo $this->Form->input('website', array(
					'label' => 'Website',
				));
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
