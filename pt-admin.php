<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * Renders the contents of the admin pages on initiation, singleton
 */
class PT_Admin extends KB_Singleton {
	/** The singleton instance */
	protected static $instance;

	/** Initiates the plugin or returns the existing instance. */
	public static function singleton() {
		if( !isset( self::$instance ) ) { 
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}

	/** Does the actual plugin initiation-adding hooks for help, stylesheets, etc. */
	protected function __construct() {
		add_filter( 'contextual_help', Array( $this, 'help' ) );
	}

	/** Renders the admin page. */
	public static function render() {
		echo <<<ADMIN_PAGE
		<div class = 'wrap'>
		        <div id = "icon-tools" class = "icon32" ><br></div>
			<h2>PressTest</h2>
		</div>
ADMIN_PAGE;
	}

	/** Modify the help text for this plugin */
	public static function help( $help ) {
		$home = PT_HOME;
		return <<<HELPTEXT
			<p>PressTest is a testing framework that lets plugin authors write and run unit tests simply and easily in an automated manner. The code, phpdocs et al can be found at <a href = '{$home}'>{$home}</a>.</p>
			<p>This plugin allows you to run tests via PHPUnit, Selenium and qUnit. Tests are picked up directly from all plugins by looking for <code>/presstests</code> in every plugin's folder (active or inactive).</p>
HELPTEXT;
	}
}
