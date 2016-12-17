<?php
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
	/**
     * @depends testEmpty
     */
	public function testFourPlusFour() {
		$this->assertEquals(4+4,8);
  	}
}
?>
