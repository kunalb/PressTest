<?php

/**
 * The core PressTest class. Responsible
 * for initializing and using the plugin.
 * @package PressTest
 */

/**#@+
 * Generic includes.
 */
/** The Admin page base class */
require "includes/kb-admin.php";
/**#@-*/

/**#@+
 * PressTest includes.
 */
/** Constant definitions */ 
require "constants.php";
/** The Plugin Test handler */
require "pt-tests.php";
/** The plugin page modifier class */
require "pt-plugin.php";
/** The admin page class */
require "pt-admin.php";
/**#@-*/

/**
 * Attaches functions to all the required actions; singleton.
 */
class PressTest {
	/** Internal classes, stored if required only. */
	private static $internals;

	/** Initialize the plugin. */
	public function __construct() {
		/** Set up empty internals */
		$this->internals = Array();

		/** Initialize the admin page class */
		$this->internals['PT_Plugin'] = new PT_Plugin();

		/** Initialize the admin page class */
		$this->internals['PT_Admin'] = new PT_Admin();

		do_action( 'PT_Initialize' );
	}

}

/** Start your engines! */
new PressTest();
