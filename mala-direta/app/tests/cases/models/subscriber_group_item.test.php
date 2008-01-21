<?php 

App::import('Model', 'SubscriberGroupItem');

class SubscriberGroupItemTestCase extends CakeTestCase {
	var $TestObject = null;

	function setUp() {
		$this->TestObject = new SubscriberGroupItem();
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