<?php
class PobjectsController extends ProjectAppController {

	var $name = 'Pobjects';
	 public function beforeFilter() {
       parent::beforeFilter();

    }

	function indexOLD() {
		$this->Pobject->recursive = 0;
		$this->set('pobjects', $this->paginate());
	}
    
    function mobileindex() {
		$this->Pobject->recursive = -1;
		$this->autoRender = false;
		$check = $this->Pobject->find('all', array('limit'=>200));
		$save = array();
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid user'
			);
		}
		echo json_encode($response);
	}
	
	 function multiadd() {
		//need to test!
		$this->autoRender = false;
		
		if($this->data['Pobject']['id'] != ''){
			//update!
			$this->Pobject->id = $this->data['Pobject']['id'];
			if ($this->Pobject->save($this->data)) {
				$this->data['Pobject']['message'] = 'what a joke2!';
				$return = $this->data;
			} else {
				$this->Session->setFlash(__('The Pobject could not be saved. Please, try again.', true));
				$return = $this->data['Pobject']['message'] = 'NOT what a joke2!';//array('Pobject'=>array('message'=>'could not save'));
			}
		}else{
			//add
			$this->Pobject->create();
			unset($this->data['id']	);
			if ($this->Pobject->save($this->data)) {
				$this->data['Pobject']['id'] = $this->Pobject->getLastInsertId();
					
				$return = $this->data;
			} else {
				$this->Session->setFlash(__('The Pobject could not be saved. Please, try again.', true));
				
				$return = $this->data;
			}
		}
		
		return json_encode($return);	
		
		
		
	}
    
    function mobileadd() {
		$this->autoRender = false;
		$this->data['Pobject']=$_POST;
		$this->Pobject->create();
		if ($this->Pobject->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->Pobject->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The Pobject could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid user'
			);
		}
		echo json_encode($response);
	}
    
     function mobilesave() {
		$this->autoRender = false;
        $this->Pobject->id=$_POST['id'];
		$this->data['Pobject']=$_POST;
		if ($this->Pobject->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The Pobject could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid Pobject'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'Pobject did not exist remotely!'
					);
			
		}
		if ($this->Pobject->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'Pobject deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'Pobject not deleted!'
					);
		}
					
		echo json_encode($response);
	}
    
    function editindexsavefld() {
		$this->autoRender = false;
		$this->Pobject->id = $_POST['pk'];
		
		if($this->Pobject->saveField($_POST['name'],$_POST['value'])) {
			$response = true;	
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
        function index() {
		//$this->Pobject->recursive = 0;
		$this->set('pobjects', $this->paginate());
         //check if this is a relationship table
        			   		 $pobjectdata = $this->Pobject->find('all');
		        
       
       
		        
        		$projects = $this->Pobject->Project->find('list');
		$pobjectbehaviors = $this->Pobject->Pobjectbehavior->find('list');

						$arr = array();
						foreach($pobjectbehaviors as $item => $i){
							$arr[] = $i;
						}
						$pobjectbehaviorstr = json_encode($arr);
							$this->set(compact('pobjectdata', 'projects', 'pobjectbehaviorstr'));
        
        
	}
    
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->Pobject->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->Pobject->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('Pobject'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->Pobject->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function deleteall() {
		$this->autoRender = false;
        
  		$this->autoRender = false;
		$arr = array();
		foreach($this->data['Pobject'] as $pobject_id => $del){
			if($del == 1 ){$arr[] = $pobject_id;}
		}
		if($this->Pobject->deleteAll(array('Pobject.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pobject', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pobject', $this->Pobject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pobject->create();
			if ($this->Pobject->save($this->data)) {
				$this->Session->setFlash(__('The pobject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobject could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Pobject->Project->find('list');
		$pobjectbehaviors = $this->Pobject->Pobjectbehavior->find('list');
		$this->set(compact('projects', 'pobjectbehaviors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pobject', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pobject->save($this->data)) {
				$this->Session->setFlash(__('The pobject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pobject->read(null, $id);
		}
		$projects = $this->Pobject->Project->find('list');
		$pobjectbehaviors = $this->Pobject->Pobjectbehavior->find('list');
		$this->set(compact('projects', 'pobjectbehaviors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pobject', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pobject->delete($id)) {
			$this->Session->setFlash(__('Pobject deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pobject was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
