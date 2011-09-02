<?php

class SampleTest extends PHPUnit_Framework_TestCase {

	public function test_correct() {
		$this->assertEquals( 2+3, 5 );
	}

	public function test_incorrect() {
		$this->assertEquals( 1+1, 11 );
	}
}
