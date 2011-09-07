<?php

/**
 * A general container for all tests loaded in a plugin.
 * @package PressTest
 */

/**
 * Tests available for hplugins.
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

	/** The test plugin URL */
	private $plugin_url;

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
		$this->plugin_url = plugins_url( '', $this->plugin_file );
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
	 * @param String Test Type
	 */
	public function links( $type ) {
		$link = ""; $link_data = rawurlencode( $this->plugin_file );

		if( $type == 'phpUnit' )  
			$link = '<a href = "' . PT_ADMIN_URL . '&pt_type=phpUnit&pt_plugin=' . $link_data . '">phpUnit tests</a>';
		else if( $type == 'qUnit' )
			$link = '<a href = "' . PT_ADMIN_URL . '&pt_type=qUnit&pt_plugin=' . $link_data . '">qUnit tests</a>';
		else throw new Exception( 'Invalid type passed' );	

		return $link;
	}

	/**
	 * Whether this plugin has any tests at all.
	 */
	public function testable() {
		return $this->has_tests;
	}

	/**
	 * Routes function to set up resources based on test type.
	 * 
	 * @param String Test Type
	 * @see run_phpUnit
	 * @see run_qUnit
	 * @return String Test Results
	 */	
	public function setup_tests( $type ) {
		if( is_callable( Array( $this, "setup_$type" ) ) )
			return call_user_func( Array( $this, "setup_$type" ) );
		else 
			throw new Exception( "Invalid test type." );	
	}

	/** 
	 * Routes function to set up actual markup to display the test.
	 * @param String Test Type
	 */
	public function run_tests( $type ) {
		if( is_callable( Array( $this, "run_$type" ) ) )
			return call_user_func( Array( $this, "run_$type" ) );
		else 
			throw new Exception( "Invalid test type." );	
	}

	/**
	 * Set up resources for running phpUnit tests.
	 */
	private function setup_phpUnit() {
	} 

	/**
	 * Set up resources for running qUnit tests.
	 */
	private function setup_qUnit() {
		wp_enqueue_script( 'qUnit', PT_QUNIT_URL . '/qunit.js', 'jquery' );
		wp_enqueue_style( 'qUnit', PT_QUNIT_URL . '/qunit.css' );

		$i = 0;
		foreach( $this->tests[ 'js' ] as $test ) {
			wp_enqueue_script( 'qUnit-test-$i', $this->plugin_url . '/ptests/' . $test, 'qUnit' );
			$i++;
		}
	}

	/**
	 * Markup required for running and showing phpUnit test results.
	 */
	private function run_phpUnit() {
		$iframe = PT_URL . "/pt-phpUnit.php?pt-tests=" . rawurlencode( WP_PLUGIN_DIR . '/' . $this->plugin_folder . 'ptests'  );
		return "<iframe width = '100%' height = '500px' src = '$iframe'></iframe>";
	}

	/*
	 * Markup required for displaying qUnit test results.
	 */
	private function run_qUnit() {
		return <<<MARKUP
			<h1 id="qunit-header">PressTest</h1>
			<h2 id="qunit-banner"></h2>
			<div id="qunit-testrunner-toolbar"></div>
			<h2 id="qunit-userAgent"></h2>
			<ol id="qunit-tests"></ol>
			<div id="qunit-fixture">test markup, will be hidden</div>
MARKUP;
	}

}
