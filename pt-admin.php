<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * The Admin page functionality for PressTest
 */
class PT_Admin extends KB_Singleton {
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

	/** Set up hooks for modifying the plugin screen */
	protected function __construct() {
		add_action( 'admin_enqueue_scripts', Array( $this, 'init' ) );
	}

	/** Run this at the right time */
	public function init() {
		if( (get_current_screen()->id) == PT_PLUGINS_SCREEN) {
			add_action( 'admin_enqueue_scripts', Array( $this, 'load_resources' ), 10, 1 );
			add_action( 'contextual_help_list', Array( $this, 'help' ), 10, 2 );
			add_filter( 'manage_' . PT_PLUGINS_SCREEN . '_columns', Array( $this, 'modify_columns' ) );
			add_action( 'manage_plugins_custom_column', Array( $this, 'tests_row' ), 10, 3 );
		}
	}

	/** Load scripts and styles required for PressTest */
	public function load_resources( $hook ) {
	}

	/** Modify the list of columns in the plugins table */
	public function modify_columns( $columns ) {
		$columns[PT_COL] = __( 'Available Tests', 'presstest' );
		return $columns;
	}

	/** Return details about the given plugin */
	public function tests_row( $column, $plugin_file, $plugin_data ) {
		if( $column == PT_COL ) {
			$plugin_tests = new PT_Tests( $plugin_file );
			return $plugin_tests->summary();
		}
	}

	/** Modify the help text for this plugin */
	public function help( $help, $screen ) {
		$home = PT_HOME;
		$helpText = <<<HELPTEXT
			<hr>
			<h3>About PressTest</h3>
			<p>PressTest is a testing framework that lets plugin authors write and run unit tests simply and easily in an automated manner. The code, phpdocs et al can be found at <a href = '{$home}'>{$home}</a>.</p>
			<p>This plugin allows you to run tests via PHPUnit, Selenium and qUnit. Tests are picked up directly from all plugins by looking for <code>/ptests</code> in every plugin's folder (active or inactive). Details about available tests are shown in the installed plugins table itself.</p>
			
HELPTEXT;
		$help[ PT_PLUGINS_SCREEN ] .= $helpText;
		return $help;
	}
}
