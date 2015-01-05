<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeCreditCardRelations Controller
 *
 * @property BraintreeCreditCardRelation $BraintreeCreditCardRelation
 * @property PaginatorComponent $Paginator
 */
class BraintreeCreditCardRelationsController extends BraintreeAppController {

public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->unlockedActions = array('editindexsavefld','admin_editindexsavefld','admin_savehabtmfld','savehabtmfld','mobileindex','mobileadd','mobilesave','mobiledelete','admin_getlist');
		
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Braintree.Csv','Paginator');

/**
 * admin_indexold method
 *
 * @return void
 */
	public function index() {
		$this->BraintreeCreditCardRelation->recursive = 0;
		$this->set('braintreeCreditCardRelations', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeCreditCardRelation->recursive = 0;
            $this->set('braintreeCreditCardRelations', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeCreditCardRelationdata = $this->BraintreeCreditCardRelation->find('all');
                              
           
           
                        
            		$braintreeCreditCards = $this->BraintreeCreditCardRelation->BraintreeCreditCard->find('list', array('fields'=>array($this->BraintreeCreditCardRelation->BraintreeCreditCard->displayField)));
		$this->set(compact('BraintreeCreditCardRelationdata', 'braintreeCreditCards'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeCreditCardRelation->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		$options = array('conditions' => array('BraintreeCreditCardRelation.' . $this->BraintreeCreditCardRelation->primaryKey => $id));
		$this->set('braintreeCreditCardRelation', $this->BraintreeCreditCardRelation->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeCreditCardRelation->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		$options = array('conditions' => array('BraintreeCreditCardRelation.' . $this->BraintreeCreditCardRelation->primaryKey => $id));
		$this->set('braintreeCreditCardRelation', $this->BraintreeCreditCardRelation->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeCreditCardRelation->create();
			if ($this->BraintreeCreditCardRelation->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeCreditCardRelation->BraintreeCreditCard->find('list');
		$this->set(compact('braintreeCreditCards'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeCreditCardRelation->create();
			if ($this->BraintreeCreditCardRelation->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeCreditCardRelation->BraintreeCreditCard->find('list');
		$this->set(compact('braintreeCreditCards'));
	}


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BraintreeCreditCardRelation->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCreditCardRelation->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCreditCardRelation.' . $this->BraintreeCreditCardRelation->primaryKey => $id));
			$this->request->data = $this->BraintreeCreditCardRelation->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeCreditCardRelation->BraintreeCreditCard->find('list');
		$this->set(compact('braintreeCreditCards'));
	}
    
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BraintreeCreditCardRelation->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCreditCardRelation->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card relation could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCreditCardRelation.' . $this->BraintreeCreditCardRelation->primaryKey => $id));
			$this->request->data = $this->BraintreeCreditCardRelation->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeCreditCardRelation->BraintreeCreditCard->find('list');
		$this->set(compact('braintreeCreditCards'));
	}    
    
    

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->BraintreeCreditCardRelation->id = $id;
		if (!$this->BraintreeCreditCardRelation->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCreditCardRelation->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree credit card relation deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree credit card relation was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
 /**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BraintreeCreditCardRelation->id = $id;
		if (!$this->BraintreeCreditCardRelation->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card relation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCreditCardRelation->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree credit card relation deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree credit card relation was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeCreditCardRelation']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeCreditCardRelation']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeCreditCardRelation']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeCreditCardRelation']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeCreditCardRelationt']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeCreditCardRelation->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeCreditCardRelation->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeCreditCardRelation->find('all');
		$items = Hash::combine($items, '{n}.BraintreeCreditCardRelation.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeCreditCardRelation']['text'] = $item['BraintreeCreditCardRelation'][$this->BraintreeCreditCardRelation->displayField];
			$newitems[] = $item['BraintreeCreditCardRelation'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeCreditCardRelation->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeCreditCardRelation->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeCreditCardRelation->find('all', array('limit'=>200));
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
		$this->BraintreeCreditCardRelation->create();
		if ($this->BraintreeCreditCardRelation->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeCreditCardRelation->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCreditCardRelation could not be saved. Please, try again.', true));
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
        $this->BraintreeCreditCardRelation->id=$_POST['id'];
		if ($this->BraintreeCreditCardRelation->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCreditCardRelation could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeCreditCardRelation'
			);
		}
		echo json_encode($response);
	}
    
    function mobiledelete($id = null) {
    	if(!isset($id)){
        	$id = $_POST['id'];
       	}
		if (!$id) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeCreditCardRelation did not exist remotely!'
					);
			
		}
		if ($this->BraintreeCreditCardRelation->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeCreditCardRelation deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeCreditCardRelation not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCreditCardRelation->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCreditCardRelation->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCreditCardRelation'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCreditCardRelation->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCreditCardRelation->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCreditCardRelation->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCreditCardRelation'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCreditCardRelation->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeCreditCardRelation'] as $braintreeCreditCardRelation_id => $del){
			if($del == 1 ){$arr[] = $braintreeCreditCardRelation_id;}
		}
		if($this->BraintreeCreditCardRelation->deleteAll(array('BraintreeCreditCardRelation.id'=>$arr))) {
			$this->Session->setFlash(__('Deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		
		}else{
			$this->Session->setFlash(__('Could not be deleted.', true));
			$this->redirect(array('action' => 'editindex'));
		}

	}
    
  
    function admin_editindexsavefld() {
    
    	$this->autoRender = false;
	
		if(isset($_POST['value'])){
			$this->BraintreeCreditCardRelation->id = $_POST['pk'];
			if($this->BraintreeCreditCardRelation->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCreditCardRelation->id = $_POST['pk'];
			if($this->BraintreeCreditCardRelation->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}
    
    function editindexsavefld() {
    
    	$this->autoRender = false;
	
		if(isset($_POST['value'])){
			$this->BraintreeCreditCardRelation->id = $_POST['pk'];
			if($this->BraintreeCreditCardRelation->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCreditCardRelation->id = $_POST['pk'];
			if($this->BraintreeCreditCardRelation->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>