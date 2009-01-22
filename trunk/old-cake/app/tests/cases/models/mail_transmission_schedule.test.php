<?php 

App::import('Model', 'MailTransmissionSchedule');

class MailTransmissionScheduleTestCase extends CakeTestCase {
	var $TestObject = null;

	function setUp() {
		$this->TestObject = new MailTransmissionSchedule();
	}

	function tearDown() {
		unset($this->TestObject);
	}

	/*
	function testMe() {
		$result = $this->TestObject->findAll();
		$expected = 1;
		$this->assertEqual($result, $expected);
	}
	*/
}
?>