<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeTransactions Controller
 *
 * @property BraintreeTransaction $BraintreeTransaction
 * @property PaginatorComponent $Paginator
 */
class BraintreeTransactionsController extends BraintreeAppController {

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
		$this->BraintreeTransaction->recursive = 0;
		$this->set('braintreeTransactions', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeTransaction->recursive = 0;
            $this->set('braintreeTransactions', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeTransactiondata = $this->BraintreeTransaction->find('all');
                              
           
           
                        
            		$braintreeCreditCards = $this->BraintreeTransaction->BraintreeCreditCard->find('list', array('fields'=>array($this->BraintreeTransaction->BraintreeCreditCard->displayField)));
		$braintreeCustomers = $this->BraintreeTransaction->BraintreeCustomer->find('list', array('fields'=>array($this->BraintreeTransaction->BraintreeCustomer->displayField)));
		$braintreeMerchants = $this->BraintreeTransaction->BraintreeMerchant->find('list', array('fields'=>array($this->BraintreeTransaction->BraintreeMerchant->displayField)));
		$this->set(compact('BraintreeTransactiondata', 'braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeTransaction->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		$options = array('conditions' => array('BraintreeTransaction.' . $this->BraintreeTransaction->primaryKey => $id));
		$this->set('braintreeTransaction', $this->BraintreeTransaction->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeTransaction->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		$options = array('conditions' => array('BraintreeTransaction.' . $this->BraintreeTransaction->primaryKey => $id));
		$this->set('braintreeTransaction', $this->BraintreeTransaction->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeTransaction->create();
			if ($this->BraintreeTransaction->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeTransaction->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeTransaction->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeTransaction->BraintreeMerchant->find('list');
		$this->set(compact('braintreeCreditCards', 'braintreeCustomers', 'braintreeMerchants'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeTransaction->create();
			if ($this->BraintreeTransaction->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeCreditCards = $this->BraintreeTransaction->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeTransaction->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeTransaction->BraintreeMerchant->find('list');
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
		if (!$this->BraintreeTransaction->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeTransaction->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeTransaction.' . $this->BraintreeTransaction->primaryKey => $id));
			$this->request->data = $this->BraintreeTransaction->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeTransaction->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeTransaction->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeTransaction->BraintreeMerchant->find('list');
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
		if (!$this->BraintreeTransaction->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeTransaction->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree transaction could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeTransaction.' . $this->BraintreeTransaction->primaryKey => $id));
			$this->request->data = $this->BraintreeTransaction->find('first', $options);
		}
		$braintreeCreditCards = $this->BraintreeTransaction->BraintreeCreditCard->find('list');
		$braintreeCustomers = $this->BraintreeTransaction->BraintreeCustomer->find('list');
		$braintreeMerchants = $this->BraintreeTransaction->BraintreeMerchant->find('list');
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
		$this->BraintreeTransaction->id = $id;
		if (!$this->BraintreeTransaction->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeTransaction->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree transaction deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree transaction was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeTransaction->id = $id;
		if (!$this->BraintreeTransaction->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree transaction'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeTransaction->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree transaction deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree transaction was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeTransaction']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeTransaction']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeTransaction']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeTransaction']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeTransactiont']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeTransaction->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeTransaction->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeTransaction->find('all');
		$items = Hash::combine($items, '{n}.BraintreeTransaction.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeTransaction']['text'] = $item['BraintreeTransaction'][$this->BraintreeTransaction->displayField];
			$newitems[] = $item['BraintreeTransaction'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeTransaction->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeTransaction->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeTransaction->find('all', array('limit'=>200));
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
		$this->BraintreeTransaction->create();
		if ($this->BraintreeTransaction->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeTransaction->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeTransaction could not be saved. Please, try again.', true));
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
        $this->BraintreeTransaction->id=$_POST['id'];
		if ($this->BraintreeTransaction->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeTransaction could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeTransaction'
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
						'message' => 'BraintreeTransaction did not exist remotely!'
					);
			
		}
		if ($this->BraintreeTransaction->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeTransaction deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeTransaction not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeTransaction->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeTransaction->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeTransaction'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeTransaction->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeTransaction->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeTransaction->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeTransaction'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeTransaction->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeTransaction'] as $braintreeTransaction_id => $del){
			if($del == 1 ){$arr[] = $braintreeTransaction_id;}
		}
		if($this->BraintreeTransaction->deleteAll(array('BraintreeTransaction.id'=>$arr))) {
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
			$this->BraintreeTransaction->id = $_POST['pk'];
			if($this->BraintreeTransaction->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeTransaction->id = $_POST['pk'];
			if($this->BraintreeTransaction->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeTransaction->id = $_POST['pk'];
			if($this->BraintreeTransaction->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeTransaction->id = $_POST['pk'];
			if($this->BraintreeTransaction->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>