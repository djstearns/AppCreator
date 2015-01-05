<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Addresses');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Addresses'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['BraintreeAddress']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Braintree Addresses: ' . $this->data['BraintreeAddress']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('BraintreeAddress');

?>
<div class="braintreeAddresses row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Braintree Address'), '#braintree-address');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='braintree-address' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('braintree_merchant_id', array(
					'label' => 'Braintree Merchant Id',
				));
				echo $this->Form->input('braintree_customer_id', array(
					'label' => 'Braintree Customer Id',
				));
				echo $this->Form->input('unique_address_identifier', array(
					'label' => 'Unique Address Identifier',
				));
				echo $this->Form->input('first_name', array(
					'label' => 'First Name',
				));
				echo $this->Form->input('last_name', array(
					'label' => 'Last Name',
				));
				echo $this->Form->input('company', array(
					'label' => 'Company',
				));
				echo $this->Form->input('street_address', array(
					'label' => 'Street Address',
				));
				echo $this->Form->input('extended_address', array(
					'label' => 'Extended Address',
				));
				echo $this->Form->input('locality', array(
					'label' => 'Locality',
				));
				echo $this->Form->input('region', array(
					'label' => 'Region',
				));
				echo $this->Form->input('postal_code', array(
					'label' => 'Postal Code',
				));
				echo $this->Form->input('country_code_alpha_2', array(
					'label' => 'Country Code Alpha 2',
				));
				echo $this->Form->input('country_code_alpha_3', array(
					'label' => 'Country Code Alpha 3',
				));
				echo $this->Form->input('country_code_numeric', array(
					'label' => 'Country Code Numeric',
				));
				echo $this->Form->input('country_name', array(
					'label' => 'Country Name',
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
