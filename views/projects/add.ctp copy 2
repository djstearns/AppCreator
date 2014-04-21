<div class="fuelux">
	<div id ="alert" class="alert" style="display:none;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <div id="alertcontent">this is only a <strong>test!</strong></div>
    </div>
    <div id="MyWizard" class="wizard">
        <ul class="steps">
            <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Define Project<span class="chevron"></span></li>
            <li data-target="#step2"><span class="badge">2</span>Define Objects<span class="chevron"></span></li>
            <li data-target="#step3"><span class="badge">3</span>Define Object Attributes<span class="chevron"></span></li>
            <li data-target="#step4"><span class="badge">4</span>Define Associations<span class="chevron"></span></li>
            <li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
        </ul>
        <div class="actions">
            <button type="button" class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
            <button type="button" class="btn btn-mini btn-next" id="nxtbtn" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
        </div>
    </div>
    
    <div class="step-content">
        <div class="step-pane active" id="step1">
       		<?php echo $this->Form->create('Project', array('id'=>'ProjectAddForm'));?>
               
                    <legend><?php __('Define Project'); ?></legend>
                <?php
					echo $this->Form->input('id', array('type'=>'hidden'));
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
            		
                    echo $this->Form->input('host');
                    echo $this->Form->input('key');
                ?>
             
             <?php echo $this->Js->submit('Save', array('id'=>'AddProject')); ?>
           
        	<?php echo $this->Form->end();?>
        </div>
        <div class="step-pane" id="step2">
         <legend><?php __('Define Objects'); ?></legend>
        <div class="span8" id ="box">
        
        <div id='numofmodels' style="display:none">1</div>
        <div id='numofaccords' style="display:none">3</div>
        
       <?php
	   /*
	    echo $this->Form->create('Fld');
        echo $this->Form->input('pobject_id');
		echo $this->Form->input('name');
		echo $this->Form->input('ftype_id', array('options'=>$ftypes));
		echo $this->Form->input('length');
		echo $this->Form->input('Fldbehavior', array('data-placeholder'=>'Choose a Fldbehavior...','class'=>'chosen-select'));
        */
        ?>
			
        </div>   
        <div class="span3">
        
            <div class="well sidebar-nav">
            
                <a id="addmodel" href="">Add new object</a>
            </div>
        </div>
        
        </div>
         <div class="step-pane" id="step3">
         <legend><?php __('Define Object Attributes'); ?></legend>
        <div class="span8" id ="box2">
        
        <div id='numofflds' style="display:none">1</div>
        
      			  
      	
        </div>   
        <div class="span3">
        
            <div class="well sidebar-nav">
            
                <a id="addmodel" href="">Add new object</a>
            </div>
        </div>
        
        </div>
        <div class="step-pane" id="step4">This is step 4</div>
        <div class="step-pane" id="step5"> </div>
       
    </div>
 
</div>
<div>

               
</div>
<script type="text/javascript">
		
		
$('#AddProject').on('click', function(){
	event.preventDefault(); // interrupt form submission
	
    $.ajax({
        type: "POST",
        url: "http://localhost/cakephp/croogo/bootstraptemp/devbootstrapnew/projects/mobileadd",
        data: $('#ProjectAddForm').serialize(),
        success: function(data, textStatus, xmlHttpRequest) {
			var obj = jQuery.parseJSON( data );  
            $("#ProjectId").val(obj.Project.id);
			$(".projectid").val(obj.Project.id);
			$("#alertcontent").html(obj.Project.message);
			$("#alert").show();
			$('#nxtbtn').click();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("There was a problem processing the request: " + jqXHR);
        }
    });	
	
});	

$(document).on( 'keyup', ".fldname", function(){
	$("#fldaccord"+$(this).attr('object')).text($(this).val());	
});

$(document).on( 'keyup', ".objname", function(){
	$("#objaccord"+$(this).attr('object')).text($(this).val());	
	$("#copyobjaccord"+$(this).attr('object')).text($(this).val());
	$("#CopyPobjectTablename"+$(this).attr('object')).text($(this).val());
});

$(document).on( 'click', ".AddPobject", function(){
	event.preventDefault(); // interrupt form submission
	var thisid = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: "http://localhost/cakephp/croogo/bootstraptemp/devbootstrapnew/pobjects/multiadd",
        data: $('#pobject'+$(this).attr('id')).serialize(),
        success: function(data, textStatus, xmlHttpRequest) {
			var obj = jQuery.parseJSON( data );  
			
            $("#PobjectId"+thisid).val(obj.Pobject.id);
			$("#PobjectId"+thisid).val(obj.Pobject.id);
			$("#alertcontent").html(obj.Pobject.message);
			$("#alert").show();
			
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("There was a problem processing the request: " + jqXHR);
        }
    });	
});


$(document).on( 'click', ".addfld", function(){	
	
	event.preventDefault(); // interrupt form submission
	var thisid = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: "http://localhost/cakephp/croogo/bootstraptemp/devbootstrapnew/flds/multiadd",
        data: $('#fldpobject'+$(this).attr('id').substring(3)).serialize(),
        success: function(data, textStatus, xmlHttpRequest) {
			var obj = jQuery.parseJSON( data );  
			
          
			$("#alertcontent").html(obj.Fld.message);
			$("#alert").show();
			
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("There was a problem processing the request: " + jqXHR);
        }
    });					
});	

$("#addmodel").click(function(){
	event.preventDefault(); 
	var numofflds = parseInt($('#numofflds').html()) + 1;
	$('#numofflds').html(parseInt($('#numofflds').html()) + 1);
	
	var numofmodels = parseInt($('#numofmodels').html()) + 1;
	$('#numofmodels').html(parseInt($('#numofmodels').html()) + 1);
	
	var numofaccords = parseInt($('#numofaccords').html()) + 1;
	$('#numofaccords').html(parseInt($('#numofaccords').html()) + 3);


var str = '	<div class="accordion" id="accordion'+numofaccords+'" object="'+numofmodels+'">' +
'        	 <form action="/cakephp/croogo/bootstraptemp/devbootstrapnew/pobjects/multiadd" id="pobject'+numofmodels+'" method="post" accept-charset="utf-8">'+
'              <div class="accordion-group">' +
'                <div class="accordion-heading">' +
'                  <a id="objaccord'+numofmodels+'" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion'+numofaccords+'" href="#collapse'+numofaccords+'">' +
'                   	New object '+numofmodels+'' +
'                    ' +
'                  </a>' +
'                </div>' +
'                <div id="collapse'+numofaccords+'" class="accordion-body collapse">' +
'                  <div class="accordion-inner">' +
'                    ' +
'                   	<input type="hidden" name="data[Pobject][id]" id="PobjectId'+numofmodels+'"><input type="hidden" name="data[Pobject][project_id]" value="'+$("#ProjectId").val()+'"id="PobjectProjectId'+numofmodels+'"><div class="input text"><label for="PobjectTablename">Tablename</label><input name="data[Pobject][tablename]" class="objname" type="text" value="new object 1" id="PobjectTablename'+numofmodels+'" object="'+numofmodels+'"></div><div class="input text"><label for="PobjectDescription">Description</label><input name="data[Pobject][description]" type="text" id="PobjectDescription"></div>                    ' +
'<input class="AddPobject" id ="'+numofmodels+'" type="submit" value="Save" /></form>' +
'                    </div>' +
'                </div>' +
'              </div> ' +
'		</div>';

var fldstr = <?php echo "'".str_replace("\n", '', $this->Form->input('Fld.1.ftype_id', array('options'=>$ftypes)))."'"; ?>

var str2 = '<div class="accordion" id="copyaccordion'+numofaccords+'" object="'+numofmodels+'">' +
'        	 <form action="/cakephp/croogo/bootstraptemp/devbootstrapnew/pobjects/add" id="fldpobject'+numofmodels+'" method="post" accept-charset="utf-8">'+
'              <div class="accordion-group">' +
'                <div class="accordion-heading">' +
'                  <a id="copyobjaccord'+numofmodels+'" class="accordion-toggle" data-toggle="collapse" data-parent="#copyaccordion'+numofaccords+'" href="#copycollapse'+numofaccords+'">' +
'                   	New object '+numofmodels+'' +
'                    ' +
'                  </a>' +
'                </div>' +
'                <div id="copycollapse'+numofaccords+'" class="accordion-body collapse">' +
'                  <div class="accordion-inner">' +
'                    ' +
'                   	<input type="hidden" name="data[Pobject]['+numofmodels+'][project_id]" disabled="disabled"id="CopyPobjectId'+numofmodels+'"><input type="hidden" disabled="disabled" name="data[Pobject]['+numofmodels+'][project_id]" id="CopyPobjectProjectId'+numofmodels+'"><div class="input text"><label for="PobjectTablename">Tablename</label><input name="data[Pobject]['+numofmodels+'][tablename]" disabled="disabled" class="objname" type="text" value="new object 1" id="CopyPobjectTablename'+numofmodels+'"></div>                    ' +
'                    Fields:' +
'                    <a href="#" class="addnewfld" object="'+numofmodels+'">Add Field</a>' +
'                    <div id="flds'+numofmodels+'">' +
'                        ' +
'                        <div class="accordion" id="fldaccordion'+numofaccords+1+'">' +
'                              <div class="accordion-group">' +
'                              ' +
'                                <div class="accordion-heading">' +
'                                ' +
'                                  <a id="fldaccord1" class="accordion-toggle" data-toggle="collapse" data-parent="#fldaccordion'+numofaccords+1+'" href="#collapseFld'+numofaccords+1+'">' +
'                                    New fld 1' +
'                                    ' +
'                                  </a>' +
'                                </div>' +
'                                ' +
'                                <div id="collapseFld'+numofaccords+1+'" class="accordion-body collapse">' +
'                                  <div class="accordion-inner">' +
'                                    ' +
'                                    <input type="hidden" name="data[Fld]['+numofflds+'][id]" id="FldId'+numofflds+'"><input type="hidden"  name="data[Fld]['+numofflds+'][pobject_id]" id="FldPobjectId'+numofflds+'">' +
'									<div class="input text"><label for="FldName">Name</label><input name="data[Fld]['+numofflds+'][name]" type="text" class="fldname" object="1" id="FldName"></div>' + 
fldstr.replace('[1]','['+numofflds+']')+
'<div class="input text"><label for="FldFldbehavior">Fldbehavior</label><input name="data[Fld]['+numofflds+'][Fldbehavior]" type="text" id="FldFldbehavior"></div>                                    ' +
'                                  </div>' +
'                                </div>' +
'                              </div>' +
'                        </div>' +
'                                            ' +
'                    </div>' +
'                        ' +
'                    ' +
'                    ' +
'                    ' +
'                    ' +
'                    ' +
'<input class="addfld" id ="fld'+numofmodels+'" type="submit" value="Save" /></form>' +
'                    </div>' +

'                </div>' +

'              </div> ' +
		
'		</div>';

$("#box").append(str);

$("#box2").append(str2);	

});


$(document).on( 'click', ".addnewfld", function(){	
	event.preventDefault(); // interrupt form submission
	var numofflds = parseInt($('#numofflds').html()) + 1;
	$('#numofflds').html(parseInt($('#numofflds').html()) + 1);
	
	var numofaccords = parseInt($('#numofaccords').html()) + 1;
	$('#numofaccords').html(parseInt($('#numofaccords').html()) + 1);
	
	var str = '<div class="accordion" id="fldaccordion'+numofaccords+'">' +
					'<div class="accordion-group">'+
						'<div class="accordion-heading"> ' +
						      '<a id="fldaccord'+numofaccords+'" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#fldaccordion'+numofaccords+'" href="#collapseFld'+numofaccords+'"> ' +
							   'New fld '+numofflds+'  </a> ' +
					    '</div>    '+
						'<div id="collapseFld'+numofaccords+'" class="accordion-body in collapse" style="height: auto;"> ' +
							'<div class="accordion-inner">  ' +
			         			'<input type="hidden" name="data[Fld]['+numofflds+'][id]" id="FldId'+numofflds+'"><input type="hidden"  name="data[Fld]['+numofflds+'][pobject_id]" value= "'++'" id="FldPobjectId'+numofflds+'">'+
					
							'<div class="input text"><label for="FldName">Name</label><input name="data[Fld]['+numofflds+'][name]" type="text" class="fldname" object="'+numofaccords+'" id="FldName"></div>'+
							'<div class="input select"><label for="FldFtypeId">Ftype</label><select name="data[Fld]['+numofflds+'][ftype_id]" id="FldFtypeId"> </select></div>' +
							'<div class="input text"><label for="FldFldbehavior">Fldbehavior</label><input name="data[Fld]['+numofflds+'][Fldbehavior]" type="text" id="FldFldbehavior"></div>' +
						'</div> '+
					'</div>' +
				'</div>'+
				'</div>';
		$('#flds'+$(this).attr('object')).append(str);		
						
});



</script>

<script type="text/javascript">
// INITIALIZING TREE


	
		var treeDataSource = new TreeDataSource({

			data: [

				{ name: 'Test Folder 1', type: 'folder', additionalParameters: { id: 'F1' } },

				{ name: 'Test Folder 2', type: 'folder', additionalParameters: { id: 'F2' } },

				{ name: 'Test Item 1', type: 'item', additionalParameters: { id: 'I1' } },

				{ name: 'Test Item 2', type: 'item', additionalParameters: { id: 'I2' } }

			],

			delay: 400

		});



		$('#MyTree').tree({dataSource: treeDataSource});



				var selectTreeFolder = function($treeEl, folder, $parentEl) {

						var $parentEl = $parentEl || $treeEl;

						if (folder.type == "folder") {

								var $folderEl = $parentEl.find("div.tree-folder-name").filter(function (_, treeFolder) {

										return $(treeFolder).text() == folder.name;

								}).parent();

								$treeEl.one("loaded", function () {

										$.each(folder.children, function (i, item) {

												selectTreeFolder($treeEl, item, $folderEl.parent());

										});

								});

								$treeEl.tree("selectFolder", $folderEl);

						}

						else {

								selectTreeItem($treeEl, folder, $parentEl);

						}

				};



				var selectTreeItem = function ($treeEl, item, $parentEl) {

						var $parentEl = $parentEl || $treeEl;

						if (item.type == "item") {

								var $itemEl = $parentEl.find("div.tree-item-name").filter(function (_, treeItem) {

										return $(treeItem).text() == item.name && !$(treeItem).parent().is(".tree-selected");

								}).parent();

								$treeEl.tree("selectItem", $itemEl);

						}

						else if (item.type == "folder") {

								selectTreeFolder($treeEl, item, $parentEl);

						}

				};



		$('#tree-select-item').on('click', function () {

						var folder1 = { name: 'Test Folder 1', type: 'folder', additionalParameters: { id: 'F1' } };

						var folder2 = { name: 'Test Folder 2', type: 'folder', additionalParameters: { id: 'F2' } };

						var item1 = { name: 'Test Item 1', type: 'item', additionalParameters: { id: 'I1' } };

						folder1.children = [folder2, ];

						folder2.children = [item1, ];

						selectTreeItem($("#MyTree"), folder1);

		});



		$('#tree-selected-items').on('click', function () {

			console.log("selected items: ", $('#MyTree').tree('selectedItems'));

		});



		$('#MyTree').on('loaded', function (evt, data) {

			console.log('tree content loaded');

		});



		$('#MyTree').on('opened', function (evt, data) {

			console.log('sub-folder opened: ', data);

		});



		$('#MyTree').on('closed', function (evt, data) {

			console.log('sub-folder closed: ', data);

		});



		$('#MyTree').on('selected', function (evt, data) {

			console.log('item selected: ', data);

		});
	
	

$('#MyWizard').wizard()



</script>