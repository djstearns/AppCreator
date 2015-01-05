<?php
App::uses('BraintreeAppController', 'Braintree.Controller');
/**
 * BraintreeMerchants Controller
 *
 * @property BraintreeMerchant $BraintreeMerchant
 * @property PaginatorComponent $Paginator
 */
class BraintreeMerchantsController extends BraintreeAppController {

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
		$this->BraintreeMerchant->recursive = 0;
		$this->set('braintreeMerchants', $this->paginate());
	}
    
   
    
 /**
 * admin_index method
 *
 * @return void
 */ 
          function admin_index() {
            //$this->BraintreeMerchant->recursive = 0;
            $this->set('braintreeMerchants', $this->paginate());
             //check if this is a relationship table
                                    $BraintreeMerchantdata = $this->BraintreeMerchant->find('all');
                              
           
           
                        
            		$this->set(compact('BraintreeMerchantdata'));
            
        
	}
  	 
   
    
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BraintreeMerchant->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		$options = array('conditions' => array('BraintreeMerchant.' . $this->BraintreeMerchant->primaryKey => $id));
		$this->set('braintreeMerchant', $this->BraintreeMerchant->find('first', $options));
	}
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BraintreeMerchant->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		$options = array('conditions' => array('BraintreeMerchant.' . $this->BraintreeMerchant->primaryKey => $id));
		$this->set('braintreeMerchant', $this->BraintreeMerchant->find('first', $options));
	}



/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BraintreeMerchant->create();
			if ($this->BraintreeMerchant->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BraintreeMerchant->create();
			if ($this->BraintreeMerchant->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
	}


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BraintreeMerchant->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeMerchant->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeMerchant.' . $this->BraintreeMerchant->primaryKey => $id));
			$this->request->data = $this->BraintreeMerchant->find('first', $options);
		}
	}
    
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BraintreeMerchant->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BraintreeMerchant->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The braintree merchant could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BraintreeMerchant.' . $this->BraintreeMerchant->primaryKey => $id));
			$this->request->data = $this->BraintreeMerchant->find('first', $options);
		}
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
		$this->BraintreeMerchant->id = $id;
		if (!$this->BraintreeMerchant->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeMerchant->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree merchant deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree merchant was not deleted'), 'default', array('class' => 'error'));
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
		$this->BraintreeMerchant->id = $id;
		if (!$this->BraintreeMerchant->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid braintree merchant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BraintreeMerchant->delete()) {
			$this->Session->setFlash(__d('croogo', 'Braintree merchant deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Braintree merchant was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
    
    function admin_import(){
		$path = getcwd();
		$this->set(compact('path'));

		if (isset($this->request->data['BraintreeMerchant']['file']['tmp_name']) &&
			is_uploaded_file($this->request->data['BraintreeMerchant']['file']['tmp_name'])) {
			$destination = $path . '/'. $this->request->data['BraintreeMerchant']['file']['name'];
			move_uploaded_file($this->request->data['BraintreeMerchant']['file']['tmp_name'], $destination);
			$filename = getcwd().'/'.$this->request->data['BraintreeMerchantt']['file']['name'];
			$this->data = $this->Csv->import($filename);
			if($this->BraintreeMerchant->saveAll($this->data)){
				$this->Session->setFlash(__d('croogo', 'File imported successfully.'), 'default', array('class' => 'success'));
			}
		}
	}
    
     function admin_getlist(){
		$this->BraintreeMerchant->recursive = 0;
    	$this->autoRender = false;
		$items = $this->BraintreeMerchant->find('all');
		$items = Hash::combine($items, '{n}.BraintreeMerchant.id', '{n}');
		$newitems = array();
		foreach($items as $i => $item){
			$item['BraintreeMerchant']['text'] = $item['BraintreeMerchant'][$this->BraintreeMerchant->displayField];
			$newitems[] = $item['BraintreeMerchant'];
		}
        echo json_encode($newitems);
        
    }
    
    function admin_export(){
		$this->autoRender = false;
		$data = $this->BraintreeMerchant->find('all');
		$filename = $this->plugin.'-'.$this->name.'Export'.date('Y-m-d-H-m-s').'.csv';
		$urlname = $this->base.'/'.$filename;
		$this->Csv->export(getcwd().'/'.$filename, $data);
		$this->redirect('http://localhost/'.$urlname);
	
	}
    
	function mobileindex() {
		$this->BraintreeMerchant->recursive = -1;
		$this->autoRender = false;
		$check = $this->BraintreeMerchant->find('all', array('limit'=>200));
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
		$this->BraintreeMerchant->create();
		if ($this->BraintreeMerchant->save($_POST)) {
			$check = array(
			'logged' => false,
			'message' => 'Saved!',
			'id'=>$this->BraintreeMerchant->getLastInsertId()
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeMerchant could not be saved. Please, try again.', true));
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
        $this->BraintreeMerchant->id=$_POST['id'];
		if ($this->BraintreeMerchant->save($_POST)) {
			$check = array(
            'id'=>$_POST['id'],
			'logged' => false,
			'message' => 'Saved!',
			);	
		} else {
			$this->Session->setFlash(__('The BraintreeMerchant could not be saved. Please, try again.', true));
		}
		if($check) {
			
			$response = $check;
				
		} else {
			$response = array(
				'logged' => false,
				'message' => 'Invalid BraintreeMerchant'
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
						'message' => 'BraintreeMerchant did not exist remotely!'
					);
			
		}
		if ($this->BraintreeMerchant->delete($id)) {
			$response = array(
						'logged' => false,
						'message' => 'BraintreeMerchant deleted!'
					);
					
		}else{
			$response = array(
						'logged' => false,
						'id'=>$id,
						'message' => 'BraintreeMerchant not deleted!'
					);
		}
					
		echo json_encode($response);
	}    
    
  
     function savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeMerchant->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeMerchant->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeMerchant'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeMerchant->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
    
    
     function admin_savehabtmfld(){
  
		$this->autoRender = false;
		$this->BraintreeMerchant->id = $_POST['pk'];
        $tr = substr($_POST['name'],0,strpos($_POST['name'],'__'));
		$ids = $this->BraintreeMerchant->$tr->find('list', array('fields'=>array('id'), 'conditions'=>array(str_replace('__','.',$_POST['name'])=>$_POST['value'])));
		$this->data = array('BraintreeMerchant'=>array('id'=>$_POST['pk']),substr($_POST['name'],0,strpos($_POST['name'],'__'))=>array(substr($_POST['name'],0,strpos($_POST['name'],'__'))=>$ids));
		
		if($this->BraintreeMerchant->save($this->data)) {
			$response = true;
				
		} else {
			$response = false;
		}
		echo json_encode($response);
	}
  
     function admin_deleteall() {
		$this->autoRender = false;
		$arr = array();
		foreach($this->data['BraintreeMerchant'] as $braintreeMerchant_id => $del){
			if($del == 1 ){$arr[] = $braintreeMerchant_id;}
		}
		if($this->BraintreeMerchant->deleteAll(array('BraintreeMerchant.id'=>$arr))) {
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
			$this->BraintreeMerchant->id = $_POST['pk'];
			if($this->BraintreeMerchant->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeMerchant->id = $_POST['pk'];
			if($this->BraintreeMerchant->saveField($_POST['name'],$_POST['value'])) {
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
			$this->BraintreeMerchant->id = $_POST['pk'];
			if($this->BraintreeMerchant->saveField($_POST['name'],$_POST['value'])) {
				$response = true;	
			} else {
				$response = false;
			}
		}
		
		if(isset($_POST['check'])){
			$_POST['value'] = $_POST['check'];
			$this->BraintreeMerchant->id = $_POST['pk'];
			if($this->BraintreeMerchant->saveField($_POST['name'],$_POST['value'])) {
				$response = intval($_POST['check']);	
			} else {
				$response = false;
			}
		}
	
		echo json_encode($response);
   
	}}
?>