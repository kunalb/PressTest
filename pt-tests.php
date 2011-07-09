<?php

/**
 * A general container for all tests loaded in a plugin.
 * @package PressTest
 */

/**
 * Maintains a cached list of tests available for plugins.
 */
class PT_Tests {
	private $plugin_file;

	public function __construct( $file ) {
		$this->plugin_file = $file;
	}

	public function summary() {
		echo $this->plugin_file;
	}
}
