<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * Generates the test results page.
 */
class PT_Admin extends KB_Admin {

	/**
	 * The tests corresponding to this plugin.
	 * @var PT_Tests
	 */
	private $tests;

	/**
	 * The test type to be run.
	 * @var String
	 */
	private $test_type;

	/**#@+
	 * @see KB_Admin
	 */
	protected $slug = PT_SLUG;
	protected $page_title = 'PressTest';

	public function __construct() {
		parent::__construct();

		$this->tests = new PT_Tests( $_GET[ 'pt_plugin' ] );
		$this->test_type = $_GET[ 'pt_type' ];
	}
	/**#@-*/

	/**
	 * The content of the page. Loads and runs the available
	 * tests and displays the results.
	 */
	public function body() {
		echo <<<BODY
			<h2>PressTest</h2>
BODY;
		$this->tests->run_tests( $this->test_type );
	}
}
