<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * The Admin page functionality for PressTest
 */
class PT_Plugin {

	/** Set up hooks for modifying the plugin screen */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', Array( $this, 'init' ) );
	}

	/** Run this at the right time */
	public function init() {
		if( (get_current_screen()->id) == PT_PLUGINS_SCREEN) {
			add_action( 'admin_enqueue_scripts', Array( $this, 'load_resources' ), 10, 1 );
			add_action( 'contextual_help_list', Array( $this, 'help' ), 10, 2 );
			add_filter( 'bulk_actions-plugins', Array( $this, 'bulk_actions' ) );
			add_filter( 'plugin_row_meta', Array( $this, 'row_meta' ), 10, 4 );
		}
	}

	/** Load scripts and styles required for PressTest */
	public function load_resources( $hook ) {
	}

	/** Modify the meta actions available for the plugin */
	public function row_meta( $meta, $plugin_file, $plugin_data, $status ) {
		$tests = new PT_Tests( $plugin_file );
		
		$options = Array( 'phpUnit', 'qUnit' );
		 
		foreach( $options as $option ) { 
			if( $tests->available( $option ) ) {
				$curLength = count( $meta );
				$meta[ $curLength ] = $meta[ count( $meta ) - 1 ];
				$meta[ $curLength - 1 ] = $tests->links( $option );
			}
		}

		return $meta;
	}

	/** Change the bulk actions behaviour */
	public function bulk_actions( $actions ) {
		kb_debug( $actions );
		return $actions;
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
