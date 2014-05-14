

        
<div  class="fuelux span11">

	<div id ="alert" class="alert" style="display:none;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <div id="alertcontent">this is only a <strong>test!</strong></div>
    </div>
    <div id="MyWizard" class="wizard">
        <ul class="steps">
            <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Define Project<span class="chevron"></span></li>
            <li data-target="#step2"><span class="badge">2</span>Define Objects<span class="chevron"></span></li>
            <li data-target="#step3"><span class="badge">3</span>Define Associations<span class="chevron"></span></li>
            <li data-target="#step4"><span class="badge">4</span>Finish<span class="chevron"></span></li>
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
            		echo $this->Form->input('user_id');
                    echo $this->Form->input('host');
                    echo $this->Form->input('key');
                ?>
             
             <?php echo $this->Js->submit('Save', array('id'=>'AddProject')); ?>
          
        	<?php echo $this->Form->end();?>
        </div>
        <div class="step-pane" id="step2">
         <legend><?php __('Define Objects'); ?></legend>
            <div id='numofaccords' style="display:none">3</div>
          	<div id='numofflds' style="display:none">1</div>
            <div id='numofmodels' style="display:none">1</div>
             <div class="span4">
            
                <div class="well sidebar-nav">
                
                    <a id="addmodel" href="">Add new object</a>
                    <div id="box"></div>
                </div>
                
            </div>
            <div class="span6" id ="box2">
              
                
            
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
       
        
        </div>
         
         
         <div class="step-pane" id="step3">
         <legend><?php __('Define Assocaitions'); ?></legend>
              <div id="dragcont" class="span10" style="height:400px;">        
                  
                    <div id="c1" class="dragmodel" style="background-color:red;width:75px;position:absolute;height:75px;" >test</div>
                    <div id="c2" class="dragmodel" style="background-color:red;width:75px;position:absolute;height:75px;" >test2</div>
                    <div id="c3" class="dragmodel" style="background-color:red;width:75px;position:absolute;height:75px;" >test2</div>
                    
             
        	</div>
            
		</div>
        <div class="step-pane" id="step4">
        
        
        
        </div>
       
    </div>

</div>


       
<script type="text/javascript">
 
jsPlumb.ready(function() {
  	
	
	jsPlumb.Defaults.Container = $("#dragcont");
 	

});

$("#dragcont").on('click', function(){
	/* jsPlumb.connect({
        source: $('#c1'),
        target: 'c2',
        anchors: ['Right', 'Right']
    })  
	*/ 

	jsPlumb.draggable($(".dragmodel"), {
		containment:"parent"
	});
	
	var endpointOptions = { 
		isSource:true, 
		isTarget:true,
		endpoint: [ "Dot", { radius:10 } ],
		anchor:[ "Perimeter", { shape:"Square" } ],
		maxConnections:-1,
		connector : ["Flowchart", {cornerRadius:10}],
		
		dropOptions:{ 
		  "drop:hit":function(e, ui) { 
			   alert('drop!'); 
			} 
		}         
	}; 

	var endpoint = jsPlumb.addEndpoint('c3', endpointOptions);
	
	var endpoint2 = jsPlumb.addEndpoint('c2', endpointOptions);
	
	var endpoint1 = jsPlumb.addEndpoint('c1', endpointOptions);
	
	
	var endpoint4 = jsPlumb.addEndpoint('c3', endpointOptions);
	
	var endpoint5 = jsPlumb.addEndpoint('c2', endpointOptions);
	
	var endpoint6 = jsPlumb.addEndpoint('c1', endpointOptions);
	
   
 
});
	
</script>
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

function array_values(input) {
  //  discuss at: http://phpjs.org/functions/array_values/
  // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Brett Zamir (http://brett-zamir.me)
  //   example 1: array_values( {firstname: 'Kevin', surname: 'van Zonneveld'} );
  //   returns 1: {0: 'Kevin', 1: 'van Zonneveld'}

  var tmp_arr = [],
    key = '';

  if (input && typeof input === 'object' && input.change_key_case) { // Duck-type check for our own array()-created PHPJS_Array
    return input.values();
  }

  for (key in input) {
    tmp_arr[tmp_arr.length] = input[key];
  }

  return tmp_arr;
}

$(document).on( 'click', ".addfld", function(){	
	
	event.preventDefault(); // interrupt form submission
	var idstr = $(this).attr('id').substring(3);
	var k = 0;
    $.ajax({
        type: "POST",
        url: "http://localhost/cakephp/croogo/bootstraptemp/devbootstrapnew/flds/multiadd",
        data: $('#fldpobject'+$(this).attr('id').substring(3)).serialize(),
        success: function(data, textStatus, xmlHttpRequest) {
			var obj = jQuery.parseJSON( data );  
				$('#fldpobject'+idstr).find('input').each(function(){
				   //your code here
				   if($(this).attr('id').substring(0,5) == 'FldId'){
						$(this).val(obj[k].Fld.id);
						k++;
					}
				});
		
			$("#alertcontent").html(obj.message);
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
'                  <div class="showflds" id="'+numofmodels+'"><a id="objaccord'+numofmodels+'" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion'+numofaccords+'" href="#collapse'+numofaccords+'">' +
'                   	New object '+numofmodels+'' +
'                    ' +
'                  </a></div>' +
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

var str2 = '<div id="modelid'+numofmodels+'" class="fldlist">  '+ 
'        	 <form action="/cakephp/croogo/bootstraptemp/devbootstrapnew/pobjects/add" id="fldpobject'+numofmodels+'" method="post" accept-charset="utf-8">'+    			
'				<span id="CopyPobjectTablename'+numofmodels+'">New Object '+numofmodels+'</span> <br />'+
'				<a href="#" class="addnewfld" object="'+numofmodels+'">Add Field</a>' +
'                    <div id="flds'+numofmodels+'">' +
'                        ' +

'                                            ' +
'                    </div>' +
'                        ' +
'                    ' +
'                    ' +
'                    ' +
'                    ' +
'                    ' +
'<input class="addfld" id ="fld'+numofmodels+'" type="submit" value="Save" />' +
'                    </div></form>' +
'</div>';

var str3 = '<div class="accordion" id="copyaccordion'+numofaccords+'" object="'+numofmodels+'">' +
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

	$(".fldlist").hide();
	$("#modelid"+$(this).attr('id')).show();	

});
$(document).on( 'click', ".showflds", function(){	
	$(".fldlist").hide();
	$("#modelid"+$(this).attr('id')).show();
});

$(document).on( 'click', ".addnewfld", function(){	
	
	var thisid = $(this).attr('object');
	var pobjectdbid = $("#PobjectId"+thisid).val();
	
	var numofflds = parseInt($('#numofflds').html()) + 1;
	$('#numofflds').html(parseInt($('#numofflds').html()) + 1);
	
	var numofaccords = parseInt($('#numofaccords').html()) + 1;
	$('#numofaccords').html(parseInt($('#numofaccords').html()) + 1);
	var fldstr = <?php echo "'".str_replace("\n", '', $this->Form->input('Fld.1.ftype_id', array('options'=>$ftypes)))."'"; ?>

	var str = '<div class="accordion" id="fldaccordion'+numofaccords+'">' +
					'<div class="accordion-group">'+
						'<div class="accordion-heading"> ' +
						      '<a id="fldaccord'+numofaccords+'" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#fldaccordion'+numofaccords+'" href="#collapseFld'+numofaccords+'"> ' +
							   'New fld '+numofflds+'  </a> ' +
					    '</div>    '+
						'<div id="collapseFld'+numofaccords+'" class="accordion-body in collapse" style="height: auto;"> ' +
							'<div class="accordion-inner">  ' +
			         			'<input type="hidden" name="data[Fld]['+numofflds+'][id]" id="FldId'+numofflds+'"><input type="hidden"  name="data[Fld]['+numofflds+'][pobject_id]" value='+pobjectdbid+' id="FldPobjectId'+numofflds+'">'+
					
							'<div class="input text"><label for="FldName">Name</label><input name="data[Fld]['+numofflds+'][name]" type="text" class="fldname" object="'+numofaccords+'" id="FldName"></div>'+
						fldstr.replace('[1]','['+numofflds+']').replace('"', '')+
						'<div class="input text"><label for="FldLength">Length</label><input name="data[Fld]['+numofflds+'][length]" type="text" class="fldlength" object="'+numofaccords+'" id="FldLength"></div>'+
							//'<div class="input text"><label for="FldFldbehavior">Fldbehavior</label><input name="data[Fld]['+numofflds+'][Fldbehavior]" type="text" id="FldFldbehavior"></div>' +
						'</div> '+
					'</div>' +
				'</div>'+
				'</div>';
		$('#flds'+$(this).attr('object')).append(str);		
						
});



</script>


<script type="text/javascript">
// INITIALIZING TREE
/*

	
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
	*/
	

$('#MyWizard').wizard()



</script>

