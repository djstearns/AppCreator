<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Addresses');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Addresses'), array('action' => 'index'));

?>
<div class="braintreeAddresses index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_merchant_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_customer_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('unique_address_identifier'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('first_name'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('last_name'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('company'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('street_address'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('extended_address'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('locality'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('region'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('country_code_alpha_2'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('country_code_alpha_3'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('country_code_numeric'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('country_name'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('created'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeAddresses as $braintreeAddress): ?>
<?php $i++; ?>	<tr id='$braintreeAddress['BraintreeAddress']['id']'>
	<td>
<?php echo $this->Form->input($braintreeAddress['BraintreeAddress']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeAddress['BraintreeAddress']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeMerchant']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_merchants/getlist' ,'id'=>'braintree_merchant_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click dclass-BraintreeMerchant', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['braintree_customer_id'], '#', array('id'=>'braintree_customer_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['unique_address_identifier'], '#', array('id'=>'unique_address_identifier','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['first_name'], '#', array('id'=>'first_name','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['last_name'], '#', array('id'=>'last_name','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['company'], '#', array('id'=>'company','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['street_address'], '#', array('id'=>'street_address','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['extended_address'], '#', array('id'=>'extended_address','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['locality'], '#', array('id'=>'locality','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['region'], '#', array('id'=>'region','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['postal_code'], '#', array('id'=>'postal_code','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['country_code_alpha_2'], '#', array('id'=>'country_code_alpha_2','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['country_code_alpha_3'], '#', array('id'=>'country_code_alpha_3','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['country_code_numeric'], '#', array('id'=>'country_code_numeric','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['country_name'], '#', array('id'=>'country_name','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['created'], '#', array('value'=>$braintreeAddress['BraintreeAddress']['created'], 'id'=>'created','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td><?php echo $this->Html->link($braintreeAddress['BraintreeAddress']['modified'], '#', array('value'=>$braintreeAddress['BraintreeAddress']['modified'], 'id'=>'modified','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeAddress['BraintreeAddress']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeAddress['BraintreeAddress']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeAddress['BraintreeAddress']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeAddress['BraintreeAddress']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeAddress['BraintreeAddress']['id'])); ?>
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