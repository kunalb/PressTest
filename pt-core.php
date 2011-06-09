<?php

/**
 * The core PressTest class. Responsible
 * for initializing and using the plugin.
 */

/**
 * Defines the constants and initializes the code.
 *
 * Attaches functions to all the required actions; singleton
 * that can be reused as required.
 */
class PT_Core {
	/**
	 * Singleton instance of class.
	 */
	static $instance;

	/**
	 * Initialize the plugin for the first time; otherwise do nothing.
	 * @see __construct
	 */
	public function init() {
		if( !isset( self::$instance ) ) { 
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}

	/** Initialize the plugin. */
	private function __construct() {
		/**#@+ Define universal constants. */
		/** Plugin Directory */
		define( 'PT_DIR', WP_PLUGIN_DIR . '/presstest' );
		/** Plugin URL */
		define( 'PT_URL', plugins_url( 'presstest' ) );
		/**#@-*/

		/** Add the admin menu page */
		add_action( ( is_multisite() )? 'network_admin_menu' : 'admin_menu', Array( $this, 'admin_page_menu' ) );
	}

	/** Register the administrator menu page. */
	public function admin_page_menu() {
		add_menu_page( 'PressTest', 'PressTest', 'administrator', 'presstest', Array( $this, 'admin_page_contents' ) );
	}

	/** Generate the general administrator page contents. */
	public function admin_page_contents() {
	}
}
