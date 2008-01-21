<?php
class MailTransmissionSchedulesController extends AppController {

	var $name = 'MailTransmissionSchedules';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MailTransmissionSchedule->recursive = 0;
		$this->set('mailTransmissionSchedules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MailTransmissionSchedule.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mailTransmissionSchedule', $this->MailTransmissionSchedule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MailTransmissionSchedule->create();
			if ($this->MailTransmissionSchedule->save($this->data)) {
				$this->Session->setFlash(__('The MailTransmissionSchedule has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MailTransmissionSchedule could not be saved. Please, try again.', true));
			}
		}
		$smtpAccounts = $this->MailTransmissionSchedule->SmtpAccount->find('list');
		$subscriberGroups = $this->MailTransmissionSchedule->SubscriberGroup->find('list');
		$messages = $this->MailTransmissionSchedule->Message->find('list');
		$this->set(compact('smtpAccounts', 'subscriberGroups', 'messages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MailTransmissionSchedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MailTransmissionSchedule->save($this->data)) {
				$this->Session->setFlash(__('The MailTransmissionSchedule has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MailTransmissionSchedule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MailTransmissionSchedule->read(null, $id);
		}
		$smtpAccounts = $this->MailTransmissionSchedule->SmtpAccount->find('list');
		$subscriberGroups = $this->MailTransmissionSchedule->SubscriberGroup->find('list');
		$messages = $this->MailTransmissionSchedule->Message->find('list');
		$this->set(compact('smtpAccounts','subscriberGroups','messages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MailTransmissionSchedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MailTransmissionSchedule->del($id)) {
			$this->Session->setFlash(__('MailTransmissionSchedule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>