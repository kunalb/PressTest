<?php

/**
 * A general container for all tests loaded in a plugin.
 * @package PressTest
 */

/**
 * Maintains a cached list of tests available for plugins.
 */
class PT_Tests {
	/** Base file for plugin */
	private $plugin_file;

	/** Folder containing plugin, if it exists */
	private $plugin_folder;

	/** Are tests available? */
	private $has_tests;

	/** Assoc array with list of tests based on type */
	private $tests;

	/** The test folder string */
	private $test_folder;

	/**
	 * Constructor. Extracts path data.
	 *
	 * Wordpress stores the base file name with folder name appended.
	 * If there is no folder name at all, then there are no tests attached at all.
	 * TODO Investigate path Structure returned in Windows.
	 */
	public function __construct( $file ) {
		$this->plugin_file = $file;
		$this->has_tests = $this->load_tests();
	}

	/**
	 * Load all available tests into qUnit and phpUnit tests based on file extension.
	 *
	 * @return bool True if any tests are found, false if otherwise
	 */
	public function load_tests() {
		if( preg_match( '/^.*?[\/]/', $this->plugin_file, $matches ) <= 0 ) 
			return false;

		$this->plugin_folder = $matches[0];
		$this->test_folder = WP_PLUGIN_DIR . '/' . $this->plugin_folder . 'ptests';

		if( !( is_dir( $this->test_folder ) ) )
			return false;

		$this->tests['js'] = Array();	
		$this->tests['php'] = Array();	

		$dir = dir( $this->test_folder );	
		while( false !== ( $entry = $dir->read() ) ) {
			if( $entry != "." && $entry != ".." ) {
				if( preg_match( '/.*\.js$/', $entry ) > 0 )
					$this->tests['js'][] = $entry;
				else if( preg_match( '/.*\.php$/', $entry ) > 0 )
					$this->tests['php'][] = $entry;
			}
		}

		return true;
	}

	/**
	 * Returns a pretty printable summary of available tests.
	 */
	public function summary() {
		if( $this->testable() ) {
			printf( __( "phpUnit (%d), qUnit (%d)." ), count($this->tests['php']), count($this->tests['js']));
		} else echo __( "<p>No tests.</p>", 'presstest' );
	}

	/**
	 * Whether this plugin has any tests at all.
	 */
	public function testable() {
		return $this->has_tests;
	}
}
