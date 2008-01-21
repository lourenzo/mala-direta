<?php
class SubscriberGroupItemsController extends AppController {

	var $name = 'SubscriberGroupItems';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubscriberGroupItem->recursive = 0;
		$this->set('subscriberGroupItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubscriberGroupItem.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subscriberGroupItem', $this->SubscriberGroupItem->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubscriberGroupItem->create();
			if ($this->SubscriberGroupItem->save($this->data)) {
				$this->Session->setFlash(__('The SubscriberGroupItem has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubscriberGroupItem could not be saved. Please, try again.', true));
			}
		}
		$subscriberGroups = $this->SubscriberGroupItem->SubscriberGroup->find('list');
		$subscribers = $this->SubscriberGroupItem->Subscriber->find('list');
		$this->set(compact('subscriberGroups', 'subscribers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubscriberGroupItem', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubscriberGroupItem->save($this->data)) {
				$this->Session->setFlash(__('The SubscriberGroupItem has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubscriberGroupItem could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubscriberGroupItem->read(null, $id);
		}
		$subscriberGroups = $this->SubscriberGroupItem->SubscriberGroup->find('list');
		$subscribers = $this->SubscriberGroupItem->Subscriber->find('list');
		$this->set(compact('subscriberGroups','subscribers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubscriberGroupItem', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubscriberGroupItem->del($id)) {
			$this->Session->setFlash(__('SubscriberGroupItem deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>