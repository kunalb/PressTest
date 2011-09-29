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

	static private $functions;
	static private $code;
	static private $files = Array ( 'plugin.php' );

	static public function _setUpBeforeClass() {
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 

		foreach( self::$files as $file ) {
			$originalFn = get_defined_functions();
			$originalFn = $originalFn['user'];

			include_once $sampleDir . $file;
			self::$code[ $file ] = file_get_contents( $sampleDir . $file );
			
			$newFn = get_defined_functions();
			$newFn = $newFn['user'];

			$functions[ $file ] = array_diff( $newFn, $originalFn );
			foreach( $functions[ $file ] as $function ) 
				self::$functions[ $file ][] = new ReflectionFunction( $function );
		}
	}

	public function provider() {
		if( empty(self::$functions) )
			self::_setUpBeforeClass();

		$test = Array();
		foreach( self::$files as $file ) {
			$test[] = Array( self::$code[ $file ], self::$functions[ $file ] );
		}
		return $test;
	}
	
	/**
	 * @dataProvider provider
	 * @group function
	 */
	public function testName( $code, $expected ) {
		$parser = new PT_Parser( $code );
		$functions = Array();

		foreach( $parser as $token ) {
			if( $token->token == T_FUNCTION )
				$functions[] = new PT_Parse_Function( $parser );
		}

		foreach( $expected as $key => $check )
			$this->assertEquals( $check->getName(), $functions[ $key ]->get( "name" ) );
	}
	
	/**
	 * @dataProvider provider
	 * @group function
	 */
	public function testComment( $code, $expected ) {
		$parser = new PT_Parser( $code );
		$functions = Array();

		foreach( $parser as $token ) {
			if( $token->token == T_FUNCTION )
				$functions[] = new PT_Parse_Function( $parser );
		}

		foreach( $expected as $key => $check )
			$this->assertEquals( $check->getDocComment(), $functions[ $key ]->get( "docbloc" ) );
	}
	
	/**
	 * @dataProvider provider
	 * @group argument
	 */
	public function testArgs( $code, $expected ) {
		$parser = new PT_Parser( $code );
		$functions = Array();

		foreach( $parser as $token ) {
			if( $token->token == T_FUNCTION )
				$functions[] = new PT_Parse_Function( $parser );
		}

		foreach( $expected as $key => $check ) {
			$this->assertEquals( $check->getNumberOfParameters(), count( $functions[ $key ]->get( "arguments" ) ) );
			$givenArgs = $check->getParameters();
			$actualArgs = $functions[ $key ]->get( "arguments" );
			foreach( $givenArgs as $i => $arg ) {
				$this->assertEquals( "$" . $arg->getName(), $actualArgs[ $i ]->get( "name" ) );
				$this->assertEquals( $arg->isPassedByReference(), $actualArgs[ $i ]->get( "reference" ) );
				$this->assertEquals( $arg->isDefaultValueAvailable(), $actualArgs[ $i ]->get( "default" ) != "" );
			}
		}
	}
}
