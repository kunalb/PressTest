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
	 * @see init
	 */
	public function __construct () {
		if( !isset( self::$instance ) )
			self::$instance = $this->init();
	}

	/**
	 * Initialize the plugin.
	 */
	public function init() {
		/**#@+
		 * Define universal constants.
		 */
		/** Plugin Directory */
		define( 'PT_DIR', WP_PLUGIN_DIR . '/presstest' );
		/** Plugin URL */
		define( 'PT_URL', plugins_url( 'presstest' ) );
		/**#@-*/
	}
}
