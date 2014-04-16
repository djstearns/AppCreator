<div class="fuelux">
    <div id="MyWizard" class="wizard">
        <ul class="steps">
            <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Define Project<span class="chevron"></span></li>
            <li data-target="#step2"><span class="badge">2</span>Define Objects<span class="chevron"></span></li>
            <li data-target="#step3"><span class="badge">3</span>Define Associations<span class="chevron"></span></li>
            <li data-target="#step4"><span class="badge">4</span>Step 4<span class="chevron"></span></li>
            <li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
        </ul>
        <div class="actions">
            <button type="button" class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
            <button type="button" class="btn btn-mini btn-next" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
        </div>
    </div>
    
    <div class="step-content">
        <div class="step-pane active" id="step1">
       		<?php echo $this->Form->create('Project');?>
               
                    <legend><?php __('Define Project'); ?></legend>
                <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
                    echo $this->Form->input('user_id');
                    echo $this->Form->input('host');
                    echo $this->Form->input('key');
                ?>
               
             
        	
        </div>
        <div class="step-pane" id="step2">
        	<?php
				echo $this->Form->input('Pobject.tablename');
				echo $this->Form->input('Pobject.description');
			?>
			
			<?php
			
				echo $this->Form->input('Fld.pobject_id');
				echo $this->Form->input('Fld.name');
				echo $this->Form->input('Fld.ftype_id');
				echo $this->Form->input('Fld.Fldbehavior');
			?>
        
        </div>
        <div class="step-pane" id="step3">This is step 3</div>
        <div class="step-pane" id="step4">This is step 4</div>
        <div class="step-pane" id="step5"> <?php echo $this->Form->end(__('Submit', true));?></div>
       
    </div>

</div>
<div>
</div>


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