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

		if( count($this->tests['js']) == 0 && count($this->tests['php']) == 0 )
			return false;

		return true;
	}

	/**
	 * Whether this plugin has any Tests.
	 */
	public function available( $type ) {
		$count = 0;
		if( $type == 'phpUnit' )  
			$count = count( $this->tests['php'] );
		else if( $type == 'qUnit' )
			$count = count( $this->tests['js'] );
		else    $count = count( $this->tests['php'] ) + count( $this->tests['js'] );	
		return $count > 0;		
	}

	/**
	 * The link to running a specific set of tests from this plugin.
	 */
	public function links( $type ) {
		$link = ""; $link_data = rawurlencode( $this->plugin_file );

		if( $type == 'phpUnit' )  
			$link = '<a href = "' . PT_ADMIN_URL . '?pt_type=phpunit&pt_plugin=' . $link_data . '">Run phpUnit tests</a>';
		else if( $type == 'qUnit' )
			$link = '<a href = "' . PT_ADMIN_URL . '?pt_type=phpunit&pt_plugin=' . $link_data . '">Run qUnit tests</a>';
		else throw new Exception( 'Invalid type passed' );	

		return $link;
	}

	/**
	 * Whether this plugin has any tests at all.
	 */
	public function testable() {
		return $this->has_tests;
	}
}
