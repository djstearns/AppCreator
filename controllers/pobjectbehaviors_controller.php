<?php
class PobjectbehaviorsController extends AppController {

	var $name = 'Pobjectbehaviors';
	 public function beforeFilter() {
       parent::beforeFilter();

    }

	function indexOLD() {
		$this->Pobjectbehavior->recursive = 0;
		$this->set('pobjectbehaviors', $this->paginate());
	}
    
    function mobileindex() {
		$this->Pobjectbehavior->recursive = -1;
		$this->autoRender = false;
		$check = $this->Pobjectbehavior->find('all', array('limit'=>200));
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
		$this->data['Pobjectbehavior']=$_POST;
		$this->Pobjectbehavior->create();
		if ($this->Pobjectbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->Pobjectbehavior->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The Pobjectbehavior could not be saved. Please, try again.', true));
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
        $this->Pobjectbehavior->id=$_POST['id'];
		$this->data['Pobjectbehavior']=$_POST;
		if ($this->Pobjectbehavior->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The Pobjectbehavior could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid Pobjectbehavior'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'Pobjectbehavior did not exist remotely!'
					);
			
		}
		if ($this->Pobjectbehavior->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'Pobjectbehavior deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'Pobjectbehavior not deleted!'
					);
		}
					
		echo json_encode($response);
	}
    
    function editindexsavefld() {
		$this->autoRender = false;
		$this->Pobjectbehavior->id = $_POST['pk'];
		
		if($this->Pobjectbehavior->saveField($_POST['name'],$_POST['value'])) {
			$response = true;	
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
        function index() {
		//$this->Pobjectbehavior->recursive = 0;
		$this->set('pobjectbehaviors', $this->paginate());
         //check if this is a relationship table
        			   		 $pobjectbehaviordata = $this->Pobjectbehavior->find('all');
		        
       
       
		        
        		$pobjects = $this->Pobjectbehavior->Pobject->find('list');

						$arr = array();
						foreach($pobjects as $item => $i){
							$arr[] = $i;
						}
						$pobjectstr = json_encode($arr);
							$this->set(compact('pobjectbehaviordata', 'pobjectstr'));
        
        
	}
    
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->Pobjectbehavior->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->Pobjectbehavior->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('Pobjectbehavior'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->Pobjectbehavior->save($this->data)) {
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
		foreach($this->data['Pobjectbehavior'] as $pobjectbehavior_id => $del){
			if($del == 1 ){$arr[] = $pobjectbehavior_id;}
		}
		if($this->Pobjectbehavior->deleteAll(array('Pobjectbehavior.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pobjectbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pobjectbehavior', $this->Pobjectbehavior->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pobjectbehavior->create();
			if ($this->Pobjectbehavior->save($this->data)) {
				$this->Session->setFlash(__('The pobjectbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobjectbehavior could not be saved. Please, try again.', true));
			}
		}
		$pobjects = $this->Pobjectbehavior->Pobject->find('list');
		$this->set(compact('pobjects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pobjectbehavior', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pobjectbehavior->save($this->data)) {
				$this->Session->setFlash(__('The pobjectbehavior has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pobjectbehavior could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pobjectbehavior->read(null, $id);
		}
		$pobjects = $this->Pobjectbehavior->Pobject->find('list');
		$this->set(compact('pobjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pobjectbehavior', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pobjectbehavior->delete($id)) {
			$this->Session->setFlash(__('Pobjectbehavior deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pobjectbehavior was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
