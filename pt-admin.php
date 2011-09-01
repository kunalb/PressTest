<?php

/**
 * Generates the administration pages.
 * @package PressTest
 */

/**
 * Generates the test results page.
 */
class PT_Admin extends KB_Admin {

	/**#@+
	 * @see KB_Admin
	 */
	protected $slug = PT_SLUG;
	protected $page_title = 'PressTest';
	/**#@-*/

	public function __construct() {
		parent::__construct();
	}

}
