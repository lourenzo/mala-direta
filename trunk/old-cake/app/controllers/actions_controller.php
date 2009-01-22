<?php
class ActionsController extends AppController {

	var $name = 'Actions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Action->recursive = 0;
		$this->set('actions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Action.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('action', $this->Action->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Action->create();
			if ($this->Action->save($this->data)) {
				$this->Session->setFlash(__('The Action has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Action could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Action', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Action->save($this->data)) {
				$this->Session->setFlash(__('The Action has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Action could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Action->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Action', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Action->del($id)) {
			$this->Session->setFlash(__('Action deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>