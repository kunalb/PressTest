<?php

/**
 * Tests for the mime -- that simulates mock functions.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage ptests 
 */

include_once dirname( dirname( __FILE__ ) ) . "/pt-mime.php";
include_once dirname( dirname( __FILE__ ) ) . "/mocked/core.php";

class PT_Mime_Test extends PHPUnit_Framework_TestCase {

	/**
	 * @group mime
	 */
	public function testMime() {
		$returned = add_action( 'test', 'test1' );
		$this->assertEquals( 'bah!', $returned, $returned );
	}

}
