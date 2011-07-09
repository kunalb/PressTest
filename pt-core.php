<?php

/**
 * The core PressTest class. Responsible
 * for initializing and using the plugin.
 * @package PressTest
 */

/**
 * Attaches functions to all the required actions; singleton.
 */
class PT_Core extends KB_Singleton {
	/**
	 * Singleton instance of class.
	 */
	protected static $instance;

	/** Internal classes, stored if required only. */
	private static $internals;

	/**
	 * Initialize the plugin for the first time; otherwise do nothing.
	 * @see __construct
	 */
	public static function singleton() {
		if( !isset( self::$instance ) ) { 
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}

	/** Initialize the plugin. */
	protected function __construct() {
		/** Set up empty internals */
		$this->internals = Array();

		/** Initialize the admin page class */
		$this->internals['PT_Admin'] = PT_Admin::singleton();
	}

}
