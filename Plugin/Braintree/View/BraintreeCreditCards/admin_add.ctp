<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Credit Cards');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Credit Cards'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['BraintreeCreditCard']['token'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Braintree Credit Cards: ' . $this->data['BraintreeCreditCard']['token'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('BraintreeCreditCard');

?>
<div class="braintreeCreditCards row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Braintree Credit Card'), '#braintree-credit-card');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='braintree-credit-card' class="tab-pane">
			<?php
				echo $this->Form->input('token');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('id', array(
					'label' => 'Id',
				));
				echo $this->Form->input('braintree_merchant_id', array(
					'label' => 'Braintree Merchant Id',
				));
				echo $this->Form->input('braintree_customer_id', array(
					'label' => 'Braintree Customer Id',
				));
				echo $this->Form->input('braintree_address_id', array(
					'label' => 'Braintree Address Id',
				));
				echo $this->Form->input('unique_card_identifier', array(
					'label' => 'Unique Card Identifier',
				));
				echo $this->Form->input('cardholder_name', array(
					'label' => 'Cardholder Name',
				));
				echo $this->Form->input('card_type', array(
					'label' => 'Card Type',
				));
				echo $this->Form->input('masked_number', array(
					'label' => 'Masked Number',
				));
				echo $this->Form->input('expiration_date', array(
					'label' => 'Expiration Date',
				));
				echo $this->Form->input('is_default', array(
					'label' => 'Is Default',
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
