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
	static private $files = Array ( "capabilities.php", 'query.php', 'kb-admin.php', 'kb-at.php', 'plugin.php', 'class-phpmailer.php', 'kb-loop.php'  );

	static public function _setUpBeforeClass() {
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 

		foreach( self::$files as $file ) {
			include_once $sampleDir . $file;
			self::$code[ $file ] = file_get_contents( $sampleDir . $file );
			self::$functions[ $file ] = Array();
		}

		$functions = get_defined_functions();
		$functions = $functions[ 'user' ];

		foreach( $functions as $function ) {
			$rf = new ReflectionFunction( $function );
			$definedIn = basename( $rf->getFileName() );

			if( in_array( $definedIn, self::$files ) )
				self::$functions[ $definedIn ][] = $rf;
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
			if( $token->token == T_CLASS )
				while( $parser->block( "{}", $token->line ) )
					$parser->next();
			else if( $token->token == T_FUNCTION )
				$functions[] = new PT_Parse_Function( $parser );
		}

		$this->assertEquals( count( $expected ), count( $functions ) );

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
			if( $token->token == T_CLASS )
				while( $parser->block( "{}", $token->line ) )
					$parser->next();
			else if( $token->token == T_FUNCTION )
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

		foreach( $parser as $i=>$token ) {
			if( $token->token == T_CLASS )
				while( $parser->block( "{}", $token->line ) )
					$parser->next();
			else if( $token->token == T_FUNCTION )
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
