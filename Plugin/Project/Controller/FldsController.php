<?php
App::uses('ProjectAppController', 'Project.Controller');
/**
 * Flds Controller
 *
 * @property Fld $Fld
 * @property PaginatorComponent $Paginator
 */
class FldsController extends ProjectAppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->unlockedActions = array('editindexsavefld','admin_editindexsavefld','admin_add');
		
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fld->recursive = 0;
		$this->set('flds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fld->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		$options = array('conditions' => array('Fld.' . $this->Fld->primaryKey => $id));
		$this->set('fld', $this->Fld->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fld->create();
			if ($this->Fld->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The fld has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The fld could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fld->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fld->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The fld has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The fld could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Fld.' . $this->Fld->primaryKey => $id));
			$this->request->data = $this->Fld->find('first', $options);
		}
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors'));
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
		$this->Fld->id = $id;
		if (!$this->Fld->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fld->delete()) {
			$this->Session->setFlash(__d('croogo', 'Fld deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Fld was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//$this->Fld->recursive = 0;
		$this->set('flds', $this->paginate());
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

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Fld->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		$options = array('conditions' => array('Fld.' . $this->Fld->primaryKey => $id));
		$this->set('fld', $this->Fld->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Fld->create();
			//debugger::dump($this->request->data);
			//exit();
			if ($this->Fld->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The fld has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The fld could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$fldbehaviorstr = '';
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors','fldbehaviorstr'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Fld->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fld->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The fld has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The fld could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Fld.' . $this->Fld->primaryKey => $id));
			$this->request->data = $this->Fld->find('first', $options);
		}
		$pobjects = $this->Fld->Pobject->find('list');
		$ftypes = $this->Fld->Ftype->find('list');
		$fldbehaviors = $this->Fld->Fldbehavior->find('list');
		$this->set(compact('pobjects', 'ftypes', 'fldbehaviors'));
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
		$this->Fld->id = $id;
		if (!$this->Fld->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid fld'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fld->delete()) {
			$this->Session->setFlash(__d('croogo', 'Fld deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Fld was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
