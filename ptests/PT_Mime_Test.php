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
	 * @group functions_args
	 */
	public function testfArguments() {
		PT_Mime::fset_callback( 'kses_init', Array( $this, 'passthrough' ) );
		$argList = Array( 1, "tn", 9 );

		$returned = kses_init( 1, "tn", 9 );
		$this->assertEquals( $argList, $returned );
	}

	public function passthrough( $args ) {
		return array_shift( func_get_args() );
	}

	/**
	 * @group functions_return
	 */
	public function testfReturn() {
		PT_Mime::fset_return( 'list_cats', 'testing' );
		$returned = list_cats( 'test', 'test1' );
		$this->assertEquals( 'testing', $returned, $returned );
	}

	/**
	 * @group functions_callback
	 */
	public function testfCallback() {
		PT_Mime::fset_callback( 'kses_init', Array( $this, 'add' ) );
		$returned = kses_init( 1, 2, 3 );
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
	 * @group functions_calls
	 */
	public function testfCalls() {
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
	 * @group functions_return
	 */
	public function testfReturns() {
		PT_Mime::fset_return( 'list_cats', 'testing' );
		PT_Mime::fset_return( 'get_to_ping', 'testing2' );

		$returned1 = list_cats( 'test', 'test1' );
		$returned2 = get_to_ping( 1 );

		$this->assertEquals( 'testing', $returned1 );
		$this->assertEquals( 'testing2', $returned2 );
	}

	/**
	 * @group functions_callback
	 */
	public function testfCallbacks() {
		PT_Mime::fset_callback( 'wp_kses', Array( $this, 'add' ) );
		PT_Mime::fset_callback( 'wp_kses_hook', Array( $this, 'passthrough' ) );

		$this->assertEquals(
			2+3,
			wp_kses( 2, 3 )
		);

		$this->assertEquals(
			Array( 2, 3, 4 ),
			wp_kses_hook( 2, 3, 4 )
		);
	}

	/**
	 * @group functions_override
	 */
	public function testfOverride() {
		PT_Mime::fset_return( 'wp_insert_user', '123' );
		PT_Mime::fset_callback( 'wp_insert_user', Array( $this, 'passthrough' ) );

		$this->assertEquals(
			wp_insert_user( '456' ),
			Array( '456' )
		);
	}

	/**
	 * @group methods_return
	 */
	public function testcReturns() {
		PT_Mime::cset_return( 'WP_Widget_Calendar', 'widget', 123 );
		$testClass = new WP_Widget_Calendar();

		$this->assertEquals( 
			123,
			$testClass->widget( 1, 3 )
		);
	}

	/**
	 * @group methods_callback
	 */
	public function testcCallback() {
		PT_Mime::cset_callback( 'WP_Widget_RSS', 'widget', Array( $this, 'add' ) );
		$testClass = new WP_Widget_RSS;

		$this->assertEquals(
			3,
			$testClass->widget( 1, 2 )
		);
	}

	/**
	 * @group functions_calls
	 */
	public function testcCalls() {
		$testClass = new WP_Nav_Menu_Widget();
		$noOfCalls = rand( 2, 10 );

		for( $i=0; $i<$noOfCalls; $i++ )
			$testClass->widget(1, 2, 3);

		$this->assertEquals( 
			$noOfCalls, 
			count( PT_Mime::cget_calls( 'WP_Nav_Menu_Widget', 'widget' ) )
		);
	}

}
