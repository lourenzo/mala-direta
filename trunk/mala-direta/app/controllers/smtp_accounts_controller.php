<?php
class SmtpAccountsController extends AppController {

	var $name = 'SmtpAccounts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SmtpAccount->recursive = 0;
		$this->set('smtpAccounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SmtpAccount.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('smtpAccount', $this->SmtpAccount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SmtpAccount->create();
			if ($this->SmtpAccount->save($this->data)) {
				$this->Session->setFlash(__('The SmtpAccount has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SmtpAccount could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SmtpAccount', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SmtpAccount->save($this->data)) {
				$this->Session->setFlash(__('The SmtpAccount has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SmtpAccount could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SmtpAccount->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SmtpAccount', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SmtpAccount->del($id)) {
			$this->Session->setFlash(__('SmtpAccount deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>