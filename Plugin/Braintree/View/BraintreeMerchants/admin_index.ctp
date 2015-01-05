<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Merchants');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Merchants'), array('action' => 'index'));

?>
<div class="braintreeMerchants index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_public_key'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_private_key'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeMerchants as $braintreeMerchant): ?>
<?php $i++; ?>	<tr id='$braintreeMerchant['BraintreeMerchant']['id']'>
	<td>
<?php echo $this->Form->input($braintreeMerchant['BraintreeMerchant']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeMerchant['BraintreeMerchant']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeMerchant['BraintreeMerchant']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeMerchant['BraintreeMerchant']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeMerchant['BraintreeMerchant']['braintree_public_key'], '#', array('id'=>'braintree_public_key','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeMerchant['BraintreeMerchant']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeMerchant['BraintreeMerchant']['braintree_private_key'], '#', array('id'=>'braintree_private_key','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeMerchant['BraintreeMerchant']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeMerchant['BraintreeMerchant']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeMerchant['BraintreeMerchant']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeMerchant['BraintreeMerchant']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeMerchant['BraintreeMerchant']['id'])); ?>
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