<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeSubscriptions Controller
 *
 * @property BraintreeSubscription $BraintreeSubscription
 * @property PaginatorComponent $Paginator
 */
class BraintreeSubscriptionsController extends BraintreeAppController {

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
		$this->BraintreeSubscription->recursive = 0;
		$this->set('braintreeSubscriptions', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeSubscription->recursive = 0;
            $this->set('braintreeSubscriptions', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeSubscriptiondata = $this->BraintreeSubscription->find('all');
                              
           
           
                        
            		$braintreeCreditCards = $this->BraintreeSubscription->BraintreeCreditCard->find('list', array('fields'=>array($this->BraintreeSubscription->BraintreeCreditCard->displayField)));
		$braintreeCustomers = $this->BraintreeSubscription->BraintreeCustomer->find('list', array('fields'=>array($this->BraintreeSubscription->BraintreeCustomer->displayField)));
		$braintreeMerchants = $this->BraintreeSubscription->BraintreeMerchant->find('list', array('fields'=>array($this->BraintreeSubscription->BraintreeMerchant->displayField)));
		$this->set(compact('BraintreeSubscriptiondata', 'braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeSubscription->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		$options = array('conditions' => array('BraintreeSubscription.' . $this->BraintreeSubscription->primaryKey => $id));
		$this->set('braintreeSubscription', $this->BraintreeSubscription->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeSubscription->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		$options = array('conditions' => array('BraintreeSubscription.' . $this->BraintreeSubscription->primaryKey => $id));
		$this->set('braintreeSubscription', $this->BraintreeSubscription->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeSubscription->create();
			if ($this->BraintreeSubscription->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeSubscription->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeSubscription->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeSubscription->BraintreeMerchant->find('list');
		$this->set(compact('braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeSubscription->create();
			if ($this->BraintreeSubscription->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeSubscription->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeSubscription->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeSubscription->BraintreeMerchant->find('list');
		$this->set(compact('braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
	}


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BraintreeSubscription->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeSubscription->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeSubscription.' . $this->BraintreeSubscription->primaryKey => $id));
			$this->request->data = $this->BraintreeSubscription->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeSubscription->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeSubscription->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeSubscription->BraintreeMerchant->find('list');
		$this->set(compact('braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
	}
    
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BraintreeSubscription->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeSubscription->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree subscription could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeSubscription.' . $this->BraintreeSubscription->primaryKey => $id));
			$this->request->data = $this->BraintreeSubscription->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeSubscription->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeSubscription->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeSubscription->BraintreeMerchant->find('list');
		$this->set(compact('braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
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
		$this->BraintreeSubscription->id = $id;
		if (!$this->BraintreeSubscription->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeSubscription->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree subscription deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree subscription was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeSubscription->id = $id;
		if (!$this->BraintreeSubscription->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree subscription'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeSubscription->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree subscription deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree subscription was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeSubscription']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeSubscription']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeSubscription']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeSubscription']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeSubscriptiont']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeSubscription->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeSubscription->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeSubscription->find('all');
		$items = Hash::combine($items, '{n}.BraintreeSubscription.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeSubscription']['text'] = $item['BraintreeSubscription'][$this->BraintreeSubscription->displayField];
			$newitems[] = $item['BraintreeSubscription'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeSubscription->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeSubscription->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeSubscription->find('all', array('limit'=>200));
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
		$this->BraintreeSubscription->create();
		if ($this->BraintreeSubscription->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeSubscription->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeSubscription could not be saved. Please, try again.', true));
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
        $this->BraintreeSubscription->id=$_POST['id'];
		if ($this->BraintreeSubscription->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeSubscription could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeSubscription'
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
						'message' => 'BraintreeSubscription did not exist remotely!'
					);
			
		}
		if ($this->BraintreeSubscription->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeSubscription deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeSubscription not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeSubscription->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeSubscription->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeSubscription'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeSubscription->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeSubscription->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeSubscription->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeSubscription'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeSubscription->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeSubscription'] as $braintreeSubscription_id => $del){
			if($del == 1 ){$arr[] = $braintreeSubscription_id;}
		}
		if($this->BraintreeSubscription->deleteAll(array('BraintreeSubscription.id'=>$arr))) {
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
			$this->BraintreeSubscription->id = $_POST['pk'];
			if($this->BraintreeSubscription->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeSubscription->id = $_POST['pk'];
			if($this->BraintreeSubscription->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeSubscription->id = $_POST['pk'];
			if($this->BraintreeSubscription->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeSubscription->id = $_POST['pk'];
			if($this->BraintreeSubscription->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>