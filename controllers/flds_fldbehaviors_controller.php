<?php
class FldsFldbehaviorsController extends AppController {

	var $name = 'FldsFldbehaviors';
	 public function beforeFilter() {
       parent::beforeFilter();

    }

	function indexOLD() {
		$this->FldsFldbehavior->recursive = 0;
		$this->set('fldsFldbehaviors', $this->paginate());
	}
    
    function mobileindex() {
		$this->FldsFldbehavior->recursive = -1;
		$this->autoRender = false;
		$check = $this->FldsFldbehavior->find('all', array('limit'=>200));
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
		$this->data['FldsFldbehavior']=$_POST;
		$this->FldsFldbehavior->create();
		if ($this->FldsFldbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->FldsFldbehavior->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The FldsFldbehavior could not be saved. Please, try again.', true));
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
        $this->FldsFldbehavior->id=$_POST['id'];
		$this->data['FldsFldbehavior']=$_POST;
		if ($this->FldsFldbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The FldsFldbehavior could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid FldsFldbehavior'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'FldsFldbehavior did not exist remotely!'
					);
			
		}
		if ($this->FldsFldbehavior->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'FldsFldbehavior deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'FldsFldbehavior not deleted!'
					);
		}
					
		echo json_encode($response);
	}
    
    function editindexsavefld() {
		$this->autoRender = false;
		$this->FldsFldbehavior->id = $_POST['pk'];
		
		if($this->FldsFldbehavior->saveField($_POST['name'],$_POST['value'])) {
			$response = true;	
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
        function index() {
		//$this->FldsFldbehavior->recursive = 0;
		$this->set('fldsFldbehaviors', $this->paginate());
         //check if this is a relationship table
        					$FldsFldbehaviordata = $this->FldsFldbehavior->find('all');
			          
       
       
		        
        		$this->set(compact('FldsFldbehaviordata'));
        
        
	}
    
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->FldsFldbehavior->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->FldsFldbehavior->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('FldsFldbehavior'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->FldsFldbehavior->save($this->data)) {
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
		foreach($this->data['FldsFldbehavior'] as $fldsFldbehavior_id => $del){
			if($del == 1 ){$arr[] = $fldsFldbehavior_id;}
		}
		if($this->FldsFldbehavior->deleteAll(array('FldsFldbehavior.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid flds fldbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fldsFldbehavior', $this->FldsFldbehavior->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FldsFldbehavior->create();
			if ($this->FldsFldbehavior->save($this->data)) {
				$this->Session->setFlash(__('The flds fldbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flds fldbehavior could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid flds fldbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FldsFldbehavior->save($this->data)) {
				$this->Session->setFlash(__('The flds fldbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flds fldbehavior could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FldsFldbehavior->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for flds fldbehavior', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FldsFldbehavior->delete($id)) {
			$this->Session->setFlash(__('Flds fldbehavior deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Flds fldbehavior was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
