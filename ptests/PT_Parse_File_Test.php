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

class PT_Parse_File_Test extends PHPUnit_Framework_TestCase {

	static private $classes = Array();
	static private $functions = Array();
	static private $code = "";
	static private $files = Array( 'kb-admin.php', 'kb-at.php', 'plugin.php', 'class-phpmailer.php' );

	static public function _setUpBeforeClass() {
		
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 

		foreach( self::$files as $file ) {
			$originalClasses = get_declared_classes();
			$originalFn = get_defined_functions();
			$originalFn = $originalFn['user'];

			include_once $sampleDir . $file;
			self::$code[ $file ] = file_get_contents( $sampleDir . $file );
			
			$newClasses = get_declared_classes();
			$newFn = get_defined_functions();
			$newFn = $newFn['user'];

			$classes[ $file ] = array_diff( $newClasses, $originalClasses );
			$functions[ $file ] = array_diff( $newFn, $originalFn );
			foreach( $classes[ $file ] as $class ) 
				self::$classes[ $file ][] = new ReflectionClass( $class );
			foreach( $functions[ $file ] as $function ) 
				self::$functions[ $file ][] = new ReflectionFunction( $function );
		}
	}

	public function provider() {
		$sampleDir = dirname( __FILE__ ) . '/samples/';
		if( empty(self::$classes) )
			self::_setUpBeforeClass();

		$test = Array();

		foreach( self::$files as $file ) {
			$classes = array_key_exists( $file, self::$classes ) ? self::$classes[ $file ] : Array();
			$functions = array_key_exists( $file, self::$functions ) ? self::$functions[ $file ] : Array();
			$test[] = Array( $sampleDir . $file, $classes, $functions );
		}

		return $test;
	}

	/**
	 * @dataProvider provider
	 */
	public function testBasic( $file, $classes, $functions ) {
		$parsedFile = new PT_Parse_File( $file );
		$parsedClasses = $parsedFile->get( 'classes' );
		$parsedFunctions = $parsedFile->get( 'functions' );

		foreach( $classes as $i=>$class ) {
			$this->assertEquals( $class->getName(), $parsedClasses[ $i ]->get( 'name' ) );
		}

		foreach( $functions as $i=>$function ) {
			$this->assertEquals( $function->getName(), $parsedFunctions[ $i ]->get( 'name' ) );
		}
	}
}
