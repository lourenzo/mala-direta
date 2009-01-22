<?php 

App::import('Model', 'SmtpAccount');

class SmtpAccountTestCase extends CakeTestCase {
	var $TestObject = null;

	function setUp() {
		$this->TestObject = new SmtpAccount();
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