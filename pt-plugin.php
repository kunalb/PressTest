<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * The plugin page modifier for PressTest
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
		return $actions;
	}

	/** Modify the help text for this plugin */
	public function help( $help, $screen ) {
		$home = PT_HOME; $images = Array( PT_IMAGES_URL . '/plugins-help.png' ); 
		$helpText = <<<HELPTEXT
			<hr>
			<h3>About PressTest</h3>
			<p>PressTest is a testing framework that lets plugin authors write and run unit tests simply and easily in an automated manner. The code, phpdocs et al can be found at <a href = '{$home}'>{$home}</a>.</p>
			<p>This plugin allows you to run tests via PHPUnit, Selenium and qUnit. Tests are picked up directly from all plugins by looking for <code>/ptests</code> in every plugin's base folder (active or inactive). Available tests appear as links below the plugin description.</p>
			<img src = '{$images[0]}' style = 'display: block; margin: 0 auto; padding-top: 1px; background-color: #fff; border: solid 1px #dfdfdf' />
			<p style = 'display: block; text-align: center; font-style: italic;'>Use the links indicated to run the tests for the plugins.</p>
			
HELPTEXT;
		$help[ PT_PLUGINS_SCREEN ] .= $helpText;
		return $help;
	}
}
