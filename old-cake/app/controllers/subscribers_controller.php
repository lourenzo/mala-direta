<?php
class SubscribersController extends AppController {

	var $name = 'Subscribers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Subscriber->recursive = 0;
		$this->set('subscribers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subscriber.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subscriber', $this->Subscriber->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subscriber->create();
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The Subscriber has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Subscriber could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subscriber', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The Subscriber has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Subscriber could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscriber->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Subscriber', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subscriber->del($id)) {
			$this->Session->setFlash(__('Subscriber deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>