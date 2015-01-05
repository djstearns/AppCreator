<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeCustomers Controller
 *
 * @property BraintreeCustomer $BraintreeCustomer
 * @property PaginatorComponent $Paginator
 */
class BraintreeCustomersController extends BraintreeAppController {

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
		$this->BraintreeCustomer->recursive = 0;
		$this->set('braintreeCustomers', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
    function admin_index() {
        //$this->BraintreeCustomer->recursive = 0;
        $this->set('braintreeCustomers', $this->paginate());
        //check if this is a relationship table
        $BraintreeCustomerdata = $this->BraintreeCustomer->find('all');
                        
        $braintreeMerchants = $this->BraintreeCustomer->BraintreeMerchant->find('list', array('fields'=>array($this->BraintreeCustomer->BraintreeMerchant->displayField)));
		$this->set(compact('BraintreeCustomerdata', 'braintreeMerchants'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeCustomer->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		$options = array('conditions' => array('BraintreeCustomer.' . $this->BraintreeCustomer->primaryKey => $id));
		$this->set('braintreeCustomer', $this->BraintreeCustomer->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeCustomer->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		$options = array('conditions' => array('BraintreeCustomer.' . $this->BraintreeCustomer->primaryKey => $id));
		$this->set('braintreeCustomer', $this->BraintreeCustomer->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeCustomer->create();
			if ($this->BraintreeCustomer->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree customer has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree customer could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeMerchants = $this->BraintreeCustomer->BraintreeMerchant->find('list');
		$this->set(compact('braintreeMerchants'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeCustomer->create();
			if ($this->BraintreeCustomer->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree customer has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree customer could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeMerchants = $this->BraintreeCustomer->BraintreeMerchant->find('list');
		$this->set(compact('braintreeMerchants'));
	}


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BraintreeCustomer->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCustomer->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree customer has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree customer could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCustomer.' . $this->BraintreeCustomer->primaryKey => $id));
			$this->request->data = $this->BraintreeCustomer->find('first', $options);
		}
		$braintreeMerchants = $this->BraintreeCustomer->BraintreeMerchant->find('list');
		$this->set(compact('braintreeMerchants'));
	}
    
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BraintreeCustomer->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCustomer->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree customer has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree customer could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCustomer.' . $this->BraintreeCustomer->primaryKey => $id));
			$this->request->data = $this->BraintreeCustomer->find('first', $options);
		}
		$braintreeMerchants = $this->BraintreeCustomer->BraintreeMerchant->find('list');
		$this->set(compact('braintreeMerchants'));
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
		$this->BraintreeCustomer->id = $id;
		if (!$this->BraintreeCustomer->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCustomer->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree customer deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree customer was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeCustomer->id = $id;
		if (!$this->BraintreeCustomer->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCustomer->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree customer deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree customer was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeCustomer']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeCustomer']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeCustomer']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeCustomer']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeCustomert']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeCustomer->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeCustomer->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeCustomer->find('all');
		$items = Hash::combine($items, '{n}.BraintreeCustomer.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeCustomer']['text'] = $item['BraintreeCustomer'][$this->BraintreeCustomer->displayField];
			$newitems[] = $item['BraintreeCustomer'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeCustomer->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeCustomer->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeCustomer->find('all', array('limit'=>200));
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
		$this->BraintreeCustomer->create();
		if ($this->BraintreeCustomer->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeCustomer->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCustomer could not be saved. Please, try again.', true));
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
        $this->BraintreeCustomer->id=$_POST['id'];
		if ($this->BraintreeCustomer->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCustomer could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeCustomer'
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
						'message' => 'BraintreeCustomer did not exist remotely!'
					);
			
		}
		if ($this->BraintreeCustomer->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeCustomer deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeCustomer not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCustomer->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCustomer->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCustomer'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCustomer->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCustomer->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCustomer->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCustomer'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCustomer->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeCustomer'] as $braintreeCustomer_id => $del){
			if($del == 1 ){$arr[] = $braintreeCustomer_id;}
		}
		if($this->BraintreeCustomer->deleteAll(array('BraintreeCustomer.id'=>$arr))) {
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
			$this->BraintreeCustomer->id = $_POST['pk'];
			if($this->BraintreeCustomer->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCustomer->id = $_POST['pk'];
			if($this->BraintreeCustomer->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeCustomer->id = $_POST['pk'];
			if($this->BraintreeCustomer->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCustomer->id = $_POST['pk'];
			if($this->BraintreeCustomer->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>