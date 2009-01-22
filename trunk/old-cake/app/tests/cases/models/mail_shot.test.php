<?php 

App::import('Model', 'MailShot');

class MailShotTestCase extends CakeTestCase {
	var $TestObject = null;

	function setUp() {
		$this->TestObject = new MailShot();
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