<?php

App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */
class FldsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->unlockedActions = array('editindexsavefld','admin_editindexsavefld','admin_add');
		
	}
	
	/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
	
	public $components = array(
	'Paginator',
	'Search.Prg' => array(
			'presetForm' => array(
				'paramType' => 'querystring',
			),
			'commonProcess' => array(
				'paramType' => 'querystring',
				'filterEmpty' => true,
			),
		),
    
);


	var $name = 'Flds';
	 

	function indexOLD() {
		$this->Fld->recursive = 0;
		$this->set('flds', $this->paginate());
	}
	
	function multiadd(){
		//need to test!
		$this->autoRender = false;
		/*
		foreach($this->data as $fld){
			if($fld['id'] != ''){
				//update!
				$this->Fld->id = $fld['id'];
				if ($this->Fld->save($fld)) {
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
		}
			*/
			$this->Fld->create();
			if ($this->Fld->saveAll($this->data['Fld'])) {
				
				$return = $this->Fld->find('all', array('conditions'=>array('pobject_id'=>$this->data['Fld'][3]['pobject_id'])));
				$return['message'] = 'Suceess!';
			}else{
				$this->data['message'] = 'Nope';
				$return = $this->data;
			}
		
		return json_encode($return);	
		
		
	
	}
    
    function mobileindex() {
		$this->Fld->recursive = -1;
		$this->autoRender = false;
		$check = $this->Fld->find('all', array('limit'=>200));
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
		$this->data['Fld']=$_POST;
		$this->Fld->create();
		if ($this->Fld->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->Fld->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The Fld could not be saved. Please, try again.', true));
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
        $this->Fld->id=$_POST['id'];
		$this->data['Fld']=$_POST;
		if ($this->Fld->save($this->data)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The Fld could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid Fld'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'Fld did not exist remotely!'
					);
			
		}
		if ($this->Fld->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'Fld deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'Fld not deleted!'
					);
		}
					
		echo json_encode($response);
	}
    
    function editindexsavefld() {
		$this->autoRender = false;
		$this->Fld->id = $_POST['pk'];
		
		if($this->Fld->saveField($_POST['name'],$_POST['value'])) {
			$response = true;	
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    function index() {
		$this->Fld->recursive = 2;
		$this->set('flds', $this->paginate());
         //check if this is a relationship table
		$flddata = $this->Fld->find('all');
		
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
	
		$arr = array();
		foreach($fldbehaviors as $item => $i){
			$arr[] = $i;
		}
		$fldbehaviorstr = json_encode($arr);
		$this->set(compact('flddata', 'pobjects', 'ftypes', 'fldbehaviorstr'));
        
        
	}
	
	function admin_index() {
		$this->Fld->recursive = 2;
		$this->set('flds', $this->paginate());
         //check if this is a relationship table
		$flddata = $this->Fld->find('all');
		
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
	
		$arr = array();
		foreach($fldbehaviors as $item => $i){
			$arr[] = $i;
		}
		$fldbehaviorstr = json_encode($arr);
		$this->set(compact('flddata', 'pobjects', 'ftypes', 'fldbehaviorstr'));
        
        
	}
    
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->Fld->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->Fld->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('Fld'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->Fld->save($this->data)) {
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
		foreach($this->data['Fld'] as $fld_id => $del){
			if($del == 1 ){$arr[] = $fld_id;}
		}
		if($this->Fld->deleteAll(array('Fld.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid fld', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fld', $this->Fld->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fld->create();
			if ($this->Fld->save($this->data)) {
				$this->Session->setFlash(__('The fld has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fld could not be saved. Please, try again.', true));
			}
		}
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid fld', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Fld->save($this->data)) {
				$this->Session->setFlash(__('The fld has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fld could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fld->read(null, $id);
		}
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for fld', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Fld->delete($id)) {
			$this->Session->setFlash(__('Fld deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Fld was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
