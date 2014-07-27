<?php
App::uses('AppController', 'Controller');
/**
 * Albuns Controller
 *
 * @property Albun $Albun
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AlbunsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Albun->recursive = 0;
		$this->set('albuns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Albun->exists($id)) {
			throw new NotFoundException(__('Invalid albun'));
		}
		$options = array('conditions' => array('Albun.' . $this->Albun->primaryKey => $id));
		$this->set('albun', $this->Albun->find('first', $options));
	}

	public function albun($id = null) {
		if (!$this->Albun->exists($id)) {
			throw new NotFoundException(__('Invalid albun'));
		}
		
		$options = array('conditions' => array('Albun.' . $this->Albun->primaryKey => $id));
		$this->set('albun', $this->Albun->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Albun->create();
			if ($this->Albun->save($this->request->data)) {
				$this->Session->setFlash(__('The albun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The albun could not be saved. Please, try again.'));
			}
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
		if (!$this->Albun->exists($id)) {
			throw new NotFoundException(__('Invalid albun'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Albun->save($this->request->data)) {
				$this->Session->setFlash(__('The albun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The albun could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Albun.' . $this->Albun->primaryKey => $id));
			$this->request->data = $this->Albun->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Albun->id = $id;
		if (!$this->Albun->exists()) {
			throw new NotFoundException(__('Invalid albun'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Albun->delete()) {
			$this->Session->setFlash(__('The albun has been deleted.'));
		} else {
			$this->Session->setFlash(__('The albun could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
