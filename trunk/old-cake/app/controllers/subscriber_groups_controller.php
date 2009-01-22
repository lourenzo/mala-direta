<?php
class SubscriberGroupsController extends AppController {

	var $name = 'SubscriberGroups';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubscriberGroup->recursive = 0;
		$this->set('subscriberGroups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubscriberGroup.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subscriberGroup', $this->SubscriberGroup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubscriberGroup->create();
			if ($this->SubscriberGroup->save($this->data)) {
				$this->Session->setFlash(__('The SubscriberGroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubscriberGroup could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubscriberGroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubscriberGroup->save($this->data)) {
				$this->Session->setFlash(__('The SubscriberGroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubscriberGroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubscriberGroup->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubscriberGroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubscriberGroup->del($id)) {
			$this->Session->setFlash(__('SubscriberGroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>