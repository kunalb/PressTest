<?php

/**
 * Tests for the file parser.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage ptests 
 */

include_once dirname( dirname( __FILE__ ) ) . "/pt-parser.php";

class PT_Parse_Function_Test extends PHPUnit_Framework_TestCase {

	public function provider() {
		$code = Array();
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 
		$files = Array( $sampleDir . "plugin.php" );

		foreach( $files as $file )
			$code[] = Array( file_get_contents( $file ) );
		
		return $code;
	}
	
	/**
	 * @dataProvider provider
	 */
	public function testSimple( $code ) {
		$parser = new PT_Parser( $code );
		$functions = Array();
		$expected = Array(
			"add_filter",
			"has_filter",
			"apply_filters",
			"apply_filters_ref_array",
			"remove_filter",
			"remove_all_filters",
			"current_filter",
			"add_action",
			"do_action",
			"did_action",
			"do_action_ref_array",
			"has_action",
			"remove_action",
			"remove_all_actions",
			"plugin_basename",
			"plugin_dir_path",
			"plugin_dir_url",
			"register_activation_hook",
			"register_deactivation_hook",
			"register_uninstall_hook",
			"_wp_call_all_hook",
			"_wp_filter_build_unique_id"
		);

		foreach( $parser as $token ) {
			if( $token->token == T_FUNCTION )
				$functions[] = new PT_Parse_Function( $parser );
		}

		foreach( $expected as $key => $check )
			$this->assertEquals( $check, $functions[ $key ]->get( "name" ) );
	}
}
