<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Customers');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Customers'), array('action' => 'index'));

?>
<div class="braintreeCustomers index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_merchant_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('model'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('foreign_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('firstName'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('lastName'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('company'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('email'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('phone'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('fax'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('website'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('created'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeCustomers as $braintreeCustomer): ?>
<?php $i++; ?>	<tr id='$braintreeCustomer['BraintreeCustomer']['id']'>
	<td>
<?php echo $this->Form->input($braintreeCustomer['BraintreeCustomer']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeCustomer['BraintreeCustomer']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeMerchant']['id'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_merchants/getlist' ,'id'=>'braintree_merchant_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click dclass-BraintreeMerchant', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['model'], '#', array('id'=>'model','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['foreign_id'], '#', array('id'=>'foreign_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['firstName'], '#', array('id'=>'firstName','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['lastName'], '#', array('id'=>'lastName','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['company'], '#', array('id'=>'company','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['email'], '#', array('id'=>'email','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['phone'], '#', array('id'=>'phone','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['fax'], '#', array('id'=>'fax','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['website'], '#', array('id'=>'website','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['created'], '#', array('value'=>$braintreeCustomer['BraintreeCustomer']['created'], 'id'=>'created','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td><?php echo $this->Html->link($braintreeCustomer['BraintreeCustomer']['modified'], '#', array('value'=>$braintreeCustomer['BraintreeCustomer']['modified'], 'id'=>'modified','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeCustomer['BraintreeCustomer']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeCustomer['BraintreeCustomer']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeCustomer['BraintreeCustomer']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeCustomer['BraintreeCustomer']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCustomer['BraintreeCustomer']['id'])); ?>
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