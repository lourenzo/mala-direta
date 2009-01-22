<?php
class MtsLogsController extends AppController {

	var $name = 'MtsLogs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MtsLog->recursive = 0;
		$this->set('mtsLogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MtsLog.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mtsLog', $this->MtsLog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MtsLog->create();
			if ($this->MtsLog->save($this->data)) {
				$this->Session->setFlash(__('The MtsLog has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MtsLog could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MtsLog', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MtsLog->save($this->data)) {
				$this->Session->setFlash(__('The MtsLog has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MtsLog could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MtsLog->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MtsLog', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MtsLog->del($id)) {
			$this->Session->setFlash(__('MtsLog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>