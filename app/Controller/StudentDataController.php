<?php
App::uses('AppController', 'Controller');
/**
 * StudentData Controller
 *
 * @property StudentData $StudentData
 * @property PaginatorComponent $Paginator
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class StudentDataController extends AppController {

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
		$this->StudentData->recursive = 0;
		$this->set('studentData', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentData->exists($id)) {
			throw new NotFoundException(__('Invalid student data'));
		}
		$options = array('conditions' => array('StudentData.' . $this->StudentData->primaryKey => $id));
		$this->set('studentData', $this->StudentData->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentData->create();
			if ($this->StudentData->save($this->request->data)) {
				$this->Session->setFlash(__('The student data has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student data could not be saved. Please, try again.'));
			}
		}
		$users = $this->StudentData->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentData->exists($id)) {
			throw new NotFoundException(__('Invalid student data'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentData->save($this->request->data)) {
				$this->Session->setFlash(__('The student data has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student data could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentData.' . $this->StudentData->primaryKey => $id));
			$this->request->data = $this->StudentData->find('first', $options);
		}
		$users = $this->StudentData->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentData->id = $id;
		if (!$this->StudentData->exists()) {
			throw new NotFoundException(__('Invalid student data'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentData->delete()) {
			$this->Session->setFlash(__('The student data has been deleted.'));
		} else {
			$this->Session->setFlash(__('The student data could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
