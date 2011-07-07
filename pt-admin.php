<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * The Admin page functionality for PressTest
 */
class PT_Admin extends KB_Admin {

	/** Call the parent's constructor with appropriate arguments. */
	public function __construct() {
		parent::__construct( Array(
			'slug' => PT_SLUG,
			'page-title' => __( 'PressTest', 'presstest' ),
			'menu-title' => __( 'PressTest', 'presstest' ),
			'capability' => 'read'
		) );
	}

	public function customize_screen() {
		add_screen_option( 'per_page', Array( 'label' => 'Rows per page' ) );
	}

	/** Renders the admin page. */
	public function body() {
		return <<<BODY
		        <div id = "icon-tools" class = "icon32"><br></div>
			<h2>PressTest</h2>
BODY;
	}

	/** Modify the help text for this plugin */
	public function help() {
		$home = PT_HOME;
		return <<<HELPTEXT
			<p>PressTest is a testing framework that lets plugin authors write and run unit tests simply and easily in an automated manner. The code, phpdocs et al can be found at <a href = '{$home}'>{$home}</a>.</p>
			<p>This plugin allows you to run tests via PHPUnit, Selenium and qUnit. Tests are picked up directly from all plugins by looking for <code>/presstests</code> in every plugin's folder (active or inactive).</p>
HELPTEXT;
	}
}
