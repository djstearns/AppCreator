<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Credit Cards');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Credit Cards'), array('action' => 'index'));

?>
<div class="braintreeCreditCards index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('token'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_merchant_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_customer_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_address_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('unique_card_identifier'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('cardholder_name'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('card_type'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('masked_number'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('expiration_date'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('is_default'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('created'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeCreditCards as $braintreeCreditCard): ?>
<?php $i++; ?>	<tr id='$braintreeCreditCard['BraintreeCreditCard']['id']'>
	<td>
<?php echo $this->Form->input($braintreeCreditCard['BraintreeCreditCard']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeCreditCard['BraintreeCreditCard']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['token'], '#', array('id'=>'token','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeMerchant']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_merchants/getlist' ,'id'=>'braintree_merchant_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click dclass-BraintreeMerchant', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['braintree_customer_id'], '#', array('id'=>'braintree_customer_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeAddress']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_addresses/getlist' ,'id'=>'braintree_address_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click dclass-BraintreeAddress', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['unique_card_identifier'], '#', array('id'=>'unique_card_identifier','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['cardholder_name'], '#', array('id'=>'cardholder_name','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['card_type'], '#', array('id'=>'card_type','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['masked_number'], '#', array('id'=>'masked_number','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['token'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->image(($braintreeCreditCard['BraintreeCreditCard']['is_default'] == 1 ? '/project/img/icons/tick.png':'/project/img/icons/cross.png'), array('value'=>($braintreeCreditCard['BraintreeCreditCard']['is_default'] == 1 ? 0:1), 'id'=>'is_default','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'checklist', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['id'], 'class'=>'editable editable-click dclass-checkbox', 'style'=>'display: inline;')); ?></td>		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['created'], '#', array('value'=>$braintreeCreditCard['BraintreeCreditCard']['created'], 'id'=>'created','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td><?php echo $this->Html->link($braintreeCreditCard['BraintreeCreditCard']['modified'], '#', array('value'=>$braintreeCreditCard['BraintreeCreditCard']['modified'], 'id'=>'modified','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeCreditCard['BraintreeCreditCard']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeCreditCard['BraintreeCreditCard']['token']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeCreditCard['BraintreeCreditCard']['token']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeCreditCard['BraintreeCreditCard']['token']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCreditCard['BraintreeCreditCard']['token'])); ?>
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
			var BraintreeAddressslist = [];
			$.each(<?php echo json_encode($braintreeAddresses); ?>, function(k, v) {
				BraintreeAddressslist.push({id: k, text: v});
			}); 
			
			$('.dclass-BraintreeAddress').editable({
				source: BraintreeAddressslist,
				select2: {
					width: 200,
					placeholder: 'Select BraintreeAddress',
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