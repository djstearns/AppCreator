<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Braintree Credit Card Relations');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Braintree Credit Card Relations'), array('action' => 'index'));

?>
<div class="braintreeCreditCardRelations index">
		<table class="table table-striped">
	<tr>
	<th></th>	
	   
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('braintree_credit_card_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('model'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('foreign_id'); ?></th>
	   
	<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>

	<?php $i = 0; ?>
<?php foreach ($braintreeCreditCardRelations as $braintreeCreditCardRelation): ?>
<?php $i++; ?>	<tr id='$braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']'>
	<td>
<?php echo $this->Form->input($braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], array('type'=>'checkbox', 'class'=>'markdelete', 'value'=>$braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'label'=>false)); ?>
	</td>
		<td><?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], '#', array('id'=>'id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCard']['token'], '#', array('data-source'=>$this->base.'/admin/'.$this->params['plugin'].'/braintree_credit_cards/getlist' ,'id'=>'braintree_credit_card_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'select2', 'data-pk'=> $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'class'=>'editable editable-click dclass-BraintreeCreditCard', 'style'=>'display: inline;')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCardRelation']['model'], '#', array('id'=>'model','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCardRelation']['foreign_id'], '#', array('id'=>'foreign_id','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'text', 'data-pk'=> $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'class'=>'editable editable-click jclass', 'style'=>'display: inline;', 'other'=>'')); ?></td>
		<td><?php echo $this->Html->link($braintreeCreditCardRelation['BraintreeCreditCardRelation']['created'], '#', array('value'=>$braintreeCreditCardRelation['BraintreeCreditCardRelation']['created'], 'id'=>'created','data-url'=>$this->here.'/editindexsavefld', 'data-type'=>'datetime', 'data-pk'=> $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'], 'class'=>'editable editable-click datetimepicker', 'style'=>'display: inline;')); ?></td>		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $braintreeCreditCardRelation['BraintreeCreditCardRelation']['id'])); ?>
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
			$.each(<?php echo json_encode($braintree_credit_cards); ?>, function(k, v) {
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