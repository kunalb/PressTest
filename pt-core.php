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
		/** Add the admin menu page */
		add_action( ( is_multisite() )? 'network_admin_menu' : 'admin_menu', Array( $this, 'admin_page_menu' ) );

		/** Initate the admin page if it's presstest's page */
		if( 'presstest' == $_GET['page'] ) {
			require "pt-admin.php";
			PT_Admin::singleton();
		}
	}

	/** 
	 * Register the administrator menu page and intiate the Admin page class. 
	 * @see PT_Admin
	 */
	public static function admin_page_menu() {
		add_menu_page( 'PressTest', 'PressTest', 'administrator', 'presstest', Array( 'PT_Admin', 'render' ) );
	}

}
