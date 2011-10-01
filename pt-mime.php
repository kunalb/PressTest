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
	static private $callbacks;
	static private $calls;
	
	/**
	 * Called by the mock functions.
	 *
	 * Logs the details of the function and calls the callback-
	 * if specified.
	 */
	static public function mime( /* ... */ ) {
	}
}
