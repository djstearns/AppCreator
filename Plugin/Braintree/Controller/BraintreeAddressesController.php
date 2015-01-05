<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeAddresses Controller
 *
 * @property BraintreeAddress $BraintreeAddress
 * @property PaginatorComponent $Paginator
 */
class BraintreeAddressesController extends BraintreeAppController {

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
		$this->BraintreeAddress->recursive = 0;
		$this->set('braintreeAddresses', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeAddress->recursive = 0;
            $this->set('braintreeAddresses', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeAddressdata = $this->BraintreeAddress->find('all');
                              
           
           
                        
            		$braintreeMerchants = $this->BraintreeAddress->BraintreeMerchant->find('list', array('fields'=>array($this->BraintreeAddress->BraintreeMerchant->displayField)));
		$this->set(compact('BraintreeAddressdata', 'braintreeMerchants'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeAddress->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		$options = array('conditions' => array('BraintreeAddress.' . $this->BraintreeAddress->primaryKey => $id));
		$this->set('braintreeAddress', $this->BraintreeAddress->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeAddress->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		$options = array('conditions' => array('BraintreeAddress.' . $this->BraintreeAddress->primaryKey => $id));
		$this->set('braintreeAddress', $this->BraintreeAddress->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeAddress->create();
			if ($this->BraintreeAddress->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree address has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree address could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeMerchants = $this->BraintreeAddress->BraintreeMerchant->find('list');
		$this->set(compact('braintreeMerchants'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeAddress->create();
			if ($this->BraintreeAddress->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree address has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree address could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$braintreeMerchants = $this->BraintreeAddress->BraintreeMerchant->find('list');
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
		if (!$this->BraintreeAddress->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeAddress->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree address has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree address could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeAddress.' . $this->BraintreeAddress->primaryKey => $id));
			$this->request->data = $this->BraintreeAddress->find('first', $options);
		}
		$braintreeMerchants = $this->BraintreeAddress->BraintreeMerchant->find('list');
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
		if (!$this->BraintreeAddress->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeAddress->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree address has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree address could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeAddress.' . $this->BraintreeAddress->primaryKey => $id));
			$this->request->data = $this->BraintreeAddress->find('first', $options);
		}
		$braintreeMerchants = $this->BraintreeAddress->BraintreeMerchant->find('list');
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
		$this->BraintreeAddress->id = $id;
		if (!$this->BraintreeAddress->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeAddress->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree address deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree address was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeAddress->id = $id;
		if (!$this->BraintreeAddress->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree address'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeAddress->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree address deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree address was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeAddress']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeAddress']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeAddress']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeAddress']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeAddresst']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeAddress->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeAddress->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeAddress->find('all');
		$items = Hash::combine($items, '{n}.BraintreeAddress.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeAddress']['text'] = $item['BraintreeAddress'][$this->BraintreeAddress->displayField];
			$newitems[] = $item['BraintreeAddress'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeAddress->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeAddress->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeAddress->find('all', array('limit'=>200));
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
		$this->BraintreeAddress->create();
		if ($this->BraintreeAddress->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeAddress->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeAddress could not be saved. Please, try again.', true));
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
        $this->BraintreeAddress->id=$_POST['id'];
		if ($this->BraintreeAddress->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeAddress could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeAddress'
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
						'message' => 'BraintreeAddress did not exist remotely!'
					);
			
		}
		if ($this->BraintreeAddress->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeAddress deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeAddress not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeAddress->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeAddress->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeAddress'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeAddress->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeAddress->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeAddress->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeAddress'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeAddress->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeAddress'] as $braintreeAddress_id => $del){
			if($del == 1 ){$arr[] = $braintreeAddress_id;}
		}
		if($this->BraintreeAddress->deleteAll(array('BraintreeAddress.id'=>$arr))) {
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
			$this->BraintreeAddress->id = $_POST['pk'];
			if($this->BraintreeAddress->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeAddress->id = $_POST['pk'];
			if($this->BraintreeAddress->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeAddress->id = $_POST['pk'];
			if($this->BraintreeAddress->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeAddress->id = $_POST['pk'];
			if($this->BraintreeAddress->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>