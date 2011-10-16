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

class PT_Parse_Class_Test extends PHPUnit_Framework_TestCase {
	static private $classes;
	static private $code;
	static private $files = Array ( "capabilities.php", 'query.php', 'kb-admin.php', 'kb-at.php', 'plugin.php', 'class-phpmailer.php', 'kb-loop.php' );

	static public function _setUpBeforeClass() {
		$sampleDir = dirname( __FILE__ ) . '/samples/';

		foreach( self::$files as $file ) {
			include_once $sampleDir . $file;
			self::$code[ $file ] = file_get_contents( $sampleDir . $file );
			self::$classes[ $file ] = Array();
		}

		$classes = get_declared_classes();
		foreach( $classes as $class ) {
			$rc = new ReflectionClass( $class );
			$definedIn = basename( $rc->getFileName() );

			if( in_array( $definedIn, self::$files ) )
				self::$classes[ $definedIn ][] = $rc;
		}
	}

	public function provider() {
		if( empty(self::$classes) )
			self::_setUpBeforeClass();

		$test = Array();
		foreach( self::$files as $file ) {
			$test[] = Array( self::$code[ $file ], self::$classes[ $file ] );
		}
		return $test;
	}

	/**
	 * @dataProvider provider
	 * @group class
	 */
	public function testSimple( $code, $classes ) {
		$parser = new PT_Parser( $code );
		$parsed = Array();

		foreach( $parser as $token )
			if( $token->token == T_CLASS )
				$parsed[] = new PT_Parse_Class( $parser );

		foreach( $classes as $key => $class ) {
			$this->assertEquals( $class->getName(), $parsed[ $key ]->get( 'name' ) );
			$this->assertEquals( count( $class->getMethods() ), count( $parsed[ $key ]->get( 'methods' ) ) );
			$this->assertEquals( count( $class->getProperties() ), count( $parsed[ $key ]->get( 'properties' ) ) );
			$this->assertEquals( $class->getDocComment(), $parsed[ $key ]->get( 'docbloc' ) );
		}
	}

	/**
	 * @dataProvider provider
	 * @group methods
	 */
	public function testMethods( $code, $classes ) {
		$parser = new PT_Parser( $code );
		$parsed = Array();

		foreach( $parser as $token )
			if( $token->token == T_CLASS )
				$parsed[] = new PT_Parse_Class( $parser );

		$this->assertEquals( count( $classes ), count( $parsed ) );

		foreach( $classes as $i => $class ) {
			$eMethods = $class->getMethods();
			$aMethods = $parsed[ $i ]->get( 'methods' );

			$this->assertEquals( count( $eMethods ), count( $aMethods ) );
		
			foreach( $eMethods as $j => $eMethod ) {
				$this->assertEquals( $eMethod->getName(), $aMethods[ $j ]->get( 'name' ) );
				$this->assertEquals( $eMethod->getDocComment(), $aMethods[ $j ]->get( 'docbloc' ) );
				$this->assertEquals( $eMethod->isStatic(), $aMethods[ $j ]->get( 'static' ), $eMethod->getName() );
				$this->assertEquals( $eMethod->getNumberOfParameters(), count( $aMethods[ $j ]->get( 'arguments' ) ) );
				$this->assertEquals( $eMethod->isFinal(), $aMethods[ $j ]->get( 'final' ) );
				$this->assertEquals( $eMethod->isAbstract(), $aMethods[ $j ]->get( 'abstract' ) );
				$this->assertEquals( $eMethod->isPublic(), $aMethods[ $j ]->get( 'access' ) == 'public' );
				$this->assertEquals( $eMethod->isProtected(), $aMethods[ $j ]->get( 'access' ) == 'protected' );
				$this->assertEquals( $eMethod->isPrivate(), $aMethods[ $j ]->get( 'access' ) == 'private' );
			}
		}
	}

	/**
	 * @dataProvider provider
	 * @group properties
	 */
	public function testProperties( $code, $classes ) {
		$parser = new PT_Parser( $code );
		$parsed = Array();

		foreach( $parser as $token )
			if( $token->token == T_CLASS )
				$parsed[] = new PT_Parse_Class( $parser );

		foreach( $classes as $i => $class ) {
			$eProps = $class->getProperties();
			$aProps = $parsed[ $i ]->get( 'properties' );
		
			foreach( $eProps as $j => $eProp ) {
				$this->assertEquals( '$' . $eProp->getName(), $aProps[ $j ]->get( 'name' ) );
				$this->assertEquals( $eProp->getDocComment(), $aProps[ $j ]->get( 'docbloc' ) );
				$this->assertEquals( $eProp->isPublic(), $aProps[ $j ]->get( 'access' ) == 'public' );
				$this->assertEquals( $eProp->isProtected(), $aProps[ $j ]->get( 'access' ) == 'protected' );
				$this->assertEquals( $eProp->isPrivate(), $aProps[ $j ]->get( 'access' ) == 'private' );
				$this->assertEquals( $eProp->isStatic(), $aProps[ $j ]->get( 'static' ) );
			}
		}
	}
}
