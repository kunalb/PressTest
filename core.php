<?php

/**
 * The core PressTest class. Responsible
 * for initializing and using the plugin.
 * @package PressTest
 */

/**#@+
 * Generic includes.
 */
/** A generic plugin base class */
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
/** The code parser used by PT_Mocker */
require "pt-parser.php";
/** Creates the mock functions file */
require "pt-mocker.php";
/**#@-*/

/**
 * Attaches functions to all the required actions; singleton.
 */
class PressTest {
	/** Internal classes, stored if required only. */
	private $internals;

	/** Initialize the plugin. */
	public function __construct() {
		/** Set up empty internals */
		$this->internals = Array();

		/** Initialize the admin page class */
		$this->internals['PT_Plugin'] = new PT_Plugin();

		/** Initialize the admin page class */
		$this->internals['PT_Admin'] = new PT_Admin();

		/** Register the function to be called on activation */
		register_activation_hook( PT_FILE, Array( $this, 'activation' ) );

		do_action( 'PT_Initialize' );

		/** For Debugging only */
		//do_action( 'PT_Activate' );
	}

	/**
	 * Create the mock functions file on the first run of the plugin. 
	 */
	public function activation() {
		do_action( 'PT_Activate' );
	}
}

/** Start your engines! */
new PressTest();
