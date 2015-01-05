<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeCreditCards Controller
 *
 * @property BraintreeCreditCard $BraintreeCreditCard
 * @property PaginatorComponent $Paginator
 */
class BraintreeCreditCardsController extends BraintreeAppController {

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
		$this->BraintreeCreditCard->recursive = 0;
		$this->set('braintreeCreditCards', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeCreditCard->recursive = 0;
            $this->set('braintreeCreditCards', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeCreditCarddata = $this->BraintreeCreditCard->find('all');
                              
           
           
                        
            		$braintreeAddresses = $this->BraintreeCreditCard->BraintreeAddress->find('list', array('fields'=>array($this->BraintreeCreditCard->BraintreeAddress->displayField)));
		$braintreeMerchants = $this->BraintreeCreditCard->BraintreeMerchant->find('list', array('fields'=>array($this->BraintreeCreditCard->BraintreeMerchant->displayField)));
		$this->set(compact('BraintreeCreditCarddata', 'braintreeAddresses', 'braintreeMerchants'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeCreditCard->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		$options = array('conditions' => array('BraintreeCreditCard.' . $this->BraintreeCreditCard->primaryKey => $id));
		$this->set('braintreeCreditCard', $this->BraintreeCreditCard->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeCreditCard->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		$options = array('conditions' => array('BraintreeCreditCard.' . $this->BraintreeCreditCard->primaryKey => $id));
		$this->set('braintreeCreditCard', $this->BraintreeCreditCard->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeCreditCard->create();
			if ($this->BraintreeCreditCard->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeAddresses = $this->BraintreeCreditCard->BraintreeAddress->find('list');
		$braintreeMerchants = $this->BraintreeCreditCard->BraintreeMerchant->find('list');
		$this->set(compact('braintreeAddresses', 'braintreeMerchants'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeCreditCard->create();
			if ($this->BraintreeCreditCard->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeAddresses = $this->BraintreeCreditCard->BraintreeAddress->find('list');
		$braintreeMerchants = $this->BraintreeCreditCard->BraintreeMerchant->find('list');
		$this->set(compact('braintreeAddresses', 'braintreeMerchants'));
	}


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BraintreeCreditCard->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCreditCard->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCreditCard.' . $this->BraintreeCreditCard->primaryKey => $id));
			$this->request->data = $this->BraintreeCreditCard->find('first', $options);
		}
		$braintreeAddresses = $this->BraintreeCreditCard->BraintreeAddress->find('list');
		$braintreeMerchants = $this->BraintreeCreditCard->BraintreeMerchant->find('list');
		$this->set(compact('braintreeAddresses', 'braintreeMerchants'));
	}
    
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BraintreeCreditCard->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeCreditCard->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree credit card could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeCreditCard.' . $this->BraintreeCreditCard->primaryKey => $id));
			$this->request->data = $this->BraintreeCreditCard->find('first', $options);
		}
		$braintreeAddresses = $this->BraintreeCreditCard->BraintreeAddress->find('list');
		$braintreeMerchants = $this->BraintreeCreditCard->BraintreeMerchant->find('list');
		$this->set(compact('braintreeAddresses', 'braintreeMerchants'));
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
		$this->BraintreeCreditCard->id = $id;
		if (!$this->BraintreeCreditCard->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCreditCard->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree credit card deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree credit card was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeCreditCard->id = $id;
		if (!$this->BraintreeCreditCard->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree credit card'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeCreditCard->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree credit card deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree credit card was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeCreditCard']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeCreditCard']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeCreditCard']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeCreditCard']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeCreditCardt']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeCreditCard->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeCreditCard->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeCreditCard->find('all');
		$items = Hash::combine($items, '{n}.BraintreeCreditCard.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeCreditCard']['text'] = $item['BraintreeCreditCard'][$this->BraintreeCreditCard->displayField];
			$newitems[] = $item['BraintreeCreditCard'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeCreditCard->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeCreditCard->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeCreditCard->find('all', array('limit'=>200));
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
		$this->BraintreeCreditCard->create();
		if ($this->BraintreeCreditCard->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeCreditCard->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCreditCard could not be saved. Please, try again.', true));
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
        $this->BraintreeCreditCard->id=$_POST['id'];
		if ($this->BraintreeCreditCard->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeCreditCard could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeCreditCard'
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
						'message' => 'BraintreeCreditCard did not exist remotely!'
					);
			
		}
		if ($this->BraintreeCreditCard->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeCreditCard deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeCreditCard not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCreditCard->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCreditCard->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCreditCard'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCreditCard->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeCreditCard->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeCreditCard->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeCreditCard'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeCreditCard->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeCreditCard'] as $braintreeCreditCard_id => $del){
			if($del == 1 ){$arr[] = $braintreeCreditCard_id;}
		}
		if($this->BraintreeCreditCard->deleteAll(array('BraintreeCreditCard.id'=>$arr))) {
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
			$this->BraintreeCreditCard->id = $_POST['pk'];
			if($this->BraintreeCreditCard->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCreditCard->id = $_POST['pk'];
			if($this->BraintreeCreditCard->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeCreditCard->id = $_POST['pk'];
			if($this->BraintreeCreditCard->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeCreditCard->id = $_POST['pk'];
			if($this->BraintreeCreditCard->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>