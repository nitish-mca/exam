<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 * @property PaginatorComponent $Paginator
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class SectionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Auth', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
		$this->set('section', $this->Section->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Section->create();
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		}
		$subjects = $this->Section->Subject->find('list');
		$users = $this->Section->User->find('list');
		$this->set(compact('subjects', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
			$this->request->data = $this->Section->find('first', $options);
		}
		$subjects = $this->Section->Subject->find('list');
		$users = $this->Section->User->find('list');
		$this->set(compact('subjects', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Section->delete()) {
			$this->Session->setFlash(__('The section has been deleted.'));
		} else {
			$this->Session->setFlash(__('The section could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
