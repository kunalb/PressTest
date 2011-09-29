<?php

/**
 * Tests for the file parser.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage ptests 
 */

include dirname( dirname( __FILE__ ) ) . "/pt-parser.php";

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
		$functionParser = new PT_Parse_Function( $parser );

		$this->assertEquals( 'add_filter', $functionParser->get( 'name' ) );
	}
}
