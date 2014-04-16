<?php
class PobjectsPobjectbehaviorsController extends AppController {

	var $name = 'PobjectsPobjectbehaviors';
	 public function beforeFilter() {
       parent::beforeFilter();

    }

	function indexOLD() {
		$this->PobjectsPobjectbehavior->recursive = 0;
		$this->set('pobjectsPobjectbehaviors', $this->paginate());
	}
    
    function mobileindex() {
		$this->PobjectsPobjectbehavior->recursive = -1;
		$this->autoRender = false;
		$check = $this->PobjectsPobjectbehavior->find('all', array('limit'=>200));
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
    
    function mobileadd() {
		$this->autoRender = false;
		$this->data['PobjectsPobjectbehavior']=$_POST;
		$this->PobjectsPobjectbehavior->create();
		if ($this->PobjectsPobjectbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->PobjectsPobjectbehavior->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The PobjectsPobjectbehavior could not be saved. Please, try again.', true));
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
        $this->PobjectsPobjectbehavior->id=$_POST['id'];
		$this->data['PobjectsPobjectbehavior']=$_POST;
		if ($this->PobjectsPobjectbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The PobjectsPobjectbehavior could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid PobjectsPobjectbehavior'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'PobjectsPobjectbehavior did not exist remotely!'
					);
			
		}
		if ($this->PobjectsPobjectbehavior->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'PobjectsPobjectbehavior deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'PobjectsPobjectbehavior not deleted!'
					);
		}
					
		echo json_encode($response);
	}
    
    function editindexsavefld() {
		$this->autoRender = false;
		$this->PobjectsPobjectbehavior->id = $_POST['pk'];
		
		if($this->PobjectsPobjectbehavior->saveField($_POST['name'],$_POST['value'])) {
			$response = true;	
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
        function index() {
		//$this->PobjectsPobjectbehavior->recursive = 0;
		$this->set('pobjectsPobjectbehaviors', $this->paginate());
         //check if this is a relationship table
        					$PobjectsPobjectbehaviordata = $this->PobjectsPobjectbehavior->find('all');
			          
       
       
		        
        		$pobjects = $this->PobjectsPobjectbehavior->Pobject->find('list');
		$pobjectbehaviors = $this->PobjectsPobjectbehavior->Pobjectbehavior->find('list');
		$this->set(compact('PobjectsPobjectbehaviordata', 'pobjects', 'pobjectbehaviors'));
        
        
	}
    
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->PobjectsPobjectbehavior->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->PobjectsPobjectbehavior->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('PobjectsPobjectbehavior'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->PobjectsPobjectbehavior->save($this->data)) {
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
		foreach($this->data['PobjectsPobjectbehavior'] as $pobjectsPobjectbehavior_id => $del){
			if($del == 1 ){$arr[] = $pobjectsPobjectbehavior_id;}
		}
		if($this->PobjectsPobjectbehavior->deleteAll(array('PobjectsPobjectbehavior.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pobjects pobjectbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pobjectsPobjectbehavior', $this->PobjectsPobjectbehavior->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PobjectsPobjectbehavior->create();
			if ($this->PobjectsPobjectbehavior->save($this->data)) {
				$this->Session->setFlash(__('The pobjects pobjectbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobjects pobjectbehavior could not be saved. Please, try again.', true));
			}
		}
		$pobjects = $this->PobjectsPobjectbehavior->Pobject->find('list');
		$pobjectbehaviors = $this->PobjectsPobjectbehavior->Pobjectbehavior->find('list');
		$this->set(compact('pobjects', 'pobjectbehaviors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pobjects pobjectbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PobjectsPobjectbehavior->save($this->data)) {
				$this->Session->setFlash(__('The pobjects pobjectbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobjects pobjectbehavior could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PobjectsPobjectbehavior->read(null, $id);
		}
		$pobjects = $this->PobjectsPobjectbehavior->Pobject->find('list');
		$pobjectbehaviors = $this->PobjectsPobjectbehavior->Pobjectbehavior->find('list');
		$this->set(compact('pobjects', 'pobjectbehaviors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pobjects pobjectbehavior', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PobjectsPobjectbehavior->delete($id)) {
			$this->Session->setFlash(__('Pobjects pobjectbehavior deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pobjects pobjectbehavior was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
