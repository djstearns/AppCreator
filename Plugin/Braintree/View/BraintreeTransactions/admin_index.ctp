<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Transactions');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Transactions'), array('action' => 'index'));

?>
<div class="braintreeTransactions index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_merchant_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_customer_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_credit_card_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_transaction_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('model'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('foreign_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('type'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('amount'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('status'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('created'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeTransactions as $braintreeTransaction): ?>
<?php $i++; ?>	<tr id='$braintreeTransaction['BraintreeTransaction']['id']'>
	<td>
<?php echo $this->Form->input($braintreeTransaction['BraintreeTransaction']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeTransaction['BraintreeTransaction']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeMerchant']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_merchants/getlist' ,'id'=>'braintree_merchant_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click dclass-BraintreeMerchant', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeCustomer']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_customers/getlist' ,'id'=>'braintree_customer_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click dclass-BraintreeCustomer', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeCreditCard']['token'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_credit_cards/getlist' ,'id'=>'braintree_credit_card_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click dclass-BraintreeCreditCard', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['braintree_transaction_id'], '#', array('id'=>'braintree_transaction_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['model'], '#', array('id'=>'model','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['foreign_id'], '#', array('id'=>'foreign_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['type'], '#', array('id'=>'type','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['status'], '#', array('id'=>'status','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['created'], '#', array('value'=>$braintreeTransaction['BraintreeTransaction']['created'], 'id'=>'created','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td><?php echo $this->Html->link($braintreeTransaction['BraintreeTransaction']['modified'], '#', array('value'=>$braintreeTransaction['BraintreeTransaction']['modified'], 'id'=>'modified','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeTransaction['BraintreeTransaction']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeTransaction['BraintreeTransaction']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeTransaction['BraintreeTransaction']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeTransaction['BraintreeTransaction']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeTransaction['BraintreeTransaction']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	</div>
<script type="text/javascript">
$('.deleteall').click( function (e) {
	e.preventDefault();
	var allVals = [];
	$('.markdelete:checked').each(function() {
	   allVals.push($(this).val());
	 });
	 $.ajax({
	  type: "POST", 
	  url: <?php echo "'".$this->here."/deleteall'"; ?>,	  data: allVals,
	  success: function(data, config) {
		$('.markdelete:checked').each(function() {
		   $('#'+$(this).val()).hide();
		 });
	  }  
	});
	 return false;
	
});

$.fn.editable.defaults.mode = 'inline';

$('.jclass').editable();
//fix me below!
			var BraintreeCreditCardslist = [];
			$.each(<?php echo json_encode($braintreeCreditCards); ?>, function(k, v) {
				BraintreeCreditCardslist.push({id: k, text: v});
			}); 
			
			$('.dclass-BraintreeCreditCard').editable({
				source: BraintreeCreditCardslist,
				select2: {
					width: 200,
					placeholder: 'Select BraintreeCreditCard',
					allowClear: true
				} 
			});
 //fix me below!
			var BraintreeCustomerslist = [];
			$.each(<?php echo json_encode($braintreeCustomers); ?>, function(k, v) {
				BraintreeCustomerslist.push({id: k, text: v});
			}); 
			
			$('.dclass-BraintreeCustomer').editable({
				source: BraintreeCustomerslist,
				select2: {
					width: 200,
					placeholder: 'Select BraintreeCustomer',
					allowClear: true
				} 
			});
 //fix me below!
			var BraintreeMerchantslist = [];
			$.each(<?php echo json_encode($braintreeMerchants); ?>, function(k, v) {
				BraintreeMerchantslist.push({id: k, text: v});
			}); 
			
			$('.dclass-BraintreeMerchant').editable({
				source: BraintreeMerchantslist,
				select2: {
					width: 200,
					placeholder: 'Select BraintreeMerchant',
					allowClear: true
				} 
			});
 		$(function(){
			$('.datetimepicker').editable({
				format: 'yyyy-mm-dd hh:ii',    
				viewformat: 'dd/mm/yyyy hh:ii',    
				datetimepicker: {
						weekStart: 1
				   }
				
			});
		});
		$('.dclass-checkbox').click( function (e){
			e.preventDefault();
			var linkitem = $(this);
			//$(this).attr("src","");
			var id = $(this).attr('id');
			var value = $(this).attr('value');
			var pk = $(this).attr('data-pk');
			$.ajax({
			  type: "POST", 
			  url: <?php echo "'".$this->here."/editindexsavefld'"; ?>,			  data: {"name":id,"check":value,"pk":pk},
			  success: function(data, config) {
				if(data == '1'){
					$(linkitem).attr("src", "<?php echo $this->base; ?>/project/img/icons/tick.png");					$(linkitem).attr("value", 0);
				}else{
					$(linkitem).attr("src", "<?php echo $this->base; ?>/project/img/icons/cross.png");					$(linkitem).attr("value", 1);
				}
			  }
			  
			});
			 return false;
		});
</script>