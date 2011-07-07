<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * The Admin page functionality for PressTest
 */
class PT_Admin extends KB_Admin {

	/** Call the parent's constructor, which works as a single check to load scripts and styles, if required. */
	public function __construct() {
		parent::__construct( PT_SLUG );
	}

	/** Renders the admin page. */
	public static function display() {
		echo <<<ADMIN_PAGE
		<div class = 'wrap'>
		        <div id = "icon-tools" class = "icon32" ><br></div>
			<h2>PressTest</h2>

			<div id = 'available-tests'>
				<h3>Available tests</h3>
				$available_tests_table
			</div>
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
