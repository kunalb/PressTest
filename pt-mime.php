<?php
/**
 * Powers the mocked classes.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 */

/**
 * Used to control all the classes mocked by the Mocker.
 * Static controller.
 *
 * Allows counting number of calls, arguments passed, location
 * from which the function is called, modifying the return value. 
 */ 
class PT_Mime {
	static private $callbacks = Array();
	static private $calls = Array();
	
	/**
	 * Called by the mock functions.
	 *
	 * Logs the details of the function and calls the callback-
	 * if specified.
	 *
	 * @param Array $args The arguments passed to the mock function.
	 */
	static public function mime( $args ) {
		$backtrace = debug_backtrace();
		return "baha!";
	}

	/**
	 * Set the return value for miming the given function.
	 */
	static public function set_return( $fn ) {
	}

	/**
	 * Set the callback for miming the given function.
	 *
	 * Note: this will over-ride any return value.
	 */
	static public function set_callback( $fn ) {
	}
}
