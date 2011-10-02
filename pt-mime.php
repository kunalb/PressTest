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
	static private $returns = Array();
	
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

		if( isset( $backtrace[1]['class'] ) ) {
			$mName = $backtrace[1]['function'];
			$cName = $backtrace[1]['class'];
			if( !array_key_exists( $cName, self::$calls ) )
				self::$calls[ $cName ] = Array();

			self::$calls[ $cName ][ $mName ][] = $args;

			if( array_key_exists( $cName, self::$callbacks ) 
			 && array_key_exists( $mName, self::$callbacks[ $cName ] ) )
				return call_user_func( self::$callbacks[ $cName ][ $mName ], $args );

			if( array_key_exists( $cName, self::$returns ) 
			 && array_key_exists( $mName, self::$returns[ $cName ] ) )
				return self::$returns[ $cName ][ $mName ];
		} else {
			$fnName = $backtrace[1]['function'];
			self::$calls[ $fnName ][] = $args;

			if( array_key_exists( $fnName, self::$callbacks ) )
				return call_user_func( self::$callbacks[ $fnName ], $args );

			if( array_key_exists( $fnName, self::$returns ) )
				return self::$returns[ $fnName ];
		}

		return "";	
	}

	/**
	 * Set the return value for miming the given function.
	 *
	 * @param String $fn Function name
	 * @param Mixed $val Return Value
	 */
	static public function fset_return( $fn, $val ) {
		self::$returns[ $fn ] = $val;
	}

	/**
	 * Set the return value for miming the given class.
	 *
	 * @param String $cl Class name
	 * @param String $m Method name
	 * @param Mixed $val Return Value
	 */
	static public function cset_return( $cl, $m, $val ) {
		self::$returns[ $cl ][ $m ] = $val;
	}

	/**
	 * Set the callback for miming the given function.
	 *
	 * All arguments will be passed as an array.
	 * This will over-ride any return value.
	 *
	 * @param String $fn Function name
	 * @param Mixed $cb Callback Function
	 */
	static public function fset_callback( $fn, $cb ) {
		self::$callbacks[ $fn ] = $cb;
	}

	/**
	 * Set the callback for miming the given method.
	 *
	 * All arguments will be passed as an array.
	 * This will over-ride any return value.
	 *
	 * @param String $fn Function name
	 * @param Mixed $cb Callback Function
	 */
	static public function cset_callback( $cl, $m, $cb ) {
		self::$callbacks[ $cl ][ $m ] = $cb;
	}

	/**
	 * Return the number of times this function has been called.
	 */
	static public function fget_calls( $fn ) {
		return self::$calls[ $fn ];
	}

	/**
	 * Return the number of times this function has been called.
	 */
	static public function cget_calls( $cl, $m ) {
		return self::$calls[ $cl ][ $m ];
	}
}
