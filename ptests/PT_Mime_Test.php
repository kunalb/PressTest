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
	 * @group args
	 */
	public function testArguments() {
		PT_Mime::fset_callback( 'add_action', Array( $this, 'passthrough' ) );
		$argList = Array( 1, "tn", 9 );

		$returned = add_action( 1, "tn", 9 );
		$this->assertEquals( $argList, $returned );
	}

	public function passthrough( $args ) {
		return array_shift( func_get_args() );
	}

	/**
	 * @group return
	 */
	public function testReturn() {
		PT_Mime::fset_return( 'list_cats', 'testing' );
		$returned = list_cats( 'test', 'test1' );
		$this->assertEquals( 'testing', $returned, $returned );
	}

	/**
	 * @group callback
	 */
	public function testCallback() {
		PT_Mime::fset_callback( 'add_action', Array( $this, 'add' ) );
		$returned = add_action( 1, 2, 3 );
		$this->assertEquals( 1+2+3, $returned, $returned );
	}

	/**
	 * The classic function used in demonstrating unit tests ;)
	 */
	public function add( $args ) {
		$sum = 0;
		foreach( $args as $arg )
			$sum += $arg;
		return $sum;	
	}

	/**
	 * @group calls
	 */
	public function testCalls() {
		PT_Mime::fset_callback( 'wp_set_post_tags', Array( $this, 'passthrough' ) );
		$noOfCalls = rand( 2, 10 );
		for( $i=0; $i<$noOfCalls; $i++ )
			wp_set_post_tags();

		$this->assertEquals( 
			$noOfCalls, 
			count( PT_Mime::fget_calls( 'wp_set_post_tags' ) )
		);
	}

	/**
	 * @group return
	 */
	public function testReturns() {
	}

	/**
	 * @group callback
	 */
	public function testCallbacks() {
	}

	public function testOverride() {
	}
}
