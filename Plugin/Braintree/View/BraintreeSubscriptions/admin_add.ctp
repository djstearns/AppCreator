<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Subscriptions');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Subscriptions'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['BraintreeSubscription']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Braintree Subscriptions: ' . $this->data['BraintreeSubscription']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('BraintreeSubscription');

?>
<div class="braintreeSubscriptions row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Braintree Subscription'), '#braintree-subscription');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='braintree-subscription' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('braintree_merchant_id', array(
					'label' => 'Braintree Merchant Id',
				));
				echo $this->Form->input('braintree_customer_id', array(
					'label' => 'Braintree Customer Id',
				));
				echo $this->Form->input('braintree_credit_card_id', array(
					'label' => 'Braintree Credit Card Id',
				));
				echo $this->Form->input('braintree_transaction_id', array(
					'label' => 'Braintree Transaction Id',
				));
				echo $this->Form->input('model', array(
					'label' => 'Model',
				));
				echo $this->Form->input('foreign_id', array(
					'label' => 'Foreign Id',
				));
				echo $this->Form->input('type', array(
					'label' => 'Type',
				));
				echo $this->Form->input('amount', array(
					'label' => 'Amount',
				));
				echo $this->Form->input('status', array(
					'label' => 'Status',
				));
				echo $this->Form->input('planId', array(
					'label' => 'PlanId',
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
