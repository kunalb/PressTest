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
	static private $files = Array( "capabilities.php", 'query.php', 'kb-admin.php', 'kb-at.php', 'plugin.php', 'class-phpmailer.php', 'kb-loop.php'  );

	static public function _setUpBeforeClass() {
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 

		foreach( self::$files as $file ) {
			include_once $sampleDir . $file;
			self::$code[ $file ] = file_get_contents( $sampleDir . $file );
			self::$classes[ $file ] = Array();
			self::$functions[ $file ] = Array();
		}

		$functions = get_defined_functions();
		$functions = $functions[ 'user' ];

		$classes = get_declared_classes();
		foreach( $classes as $class ) {
			$rc = new ReflectionClass( $class );
			$definedIn = basename( $rc->getFileName() );

			if( in_array( $definedIn, self::$files ) )
				self::$classes[ $definedIn ][] = $rc;
		}

		foreach( $functions as $function ) {
			$rf = new ReflectionFunction( $function );
			$definedIn = basename( $rf->getFileName() );

			if( in_array( $definedIn, self::$files ) )
				self::$functions[ $definedIn ][] = $rf;
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

		$this->assertEquals( count( $classes ), count( $parsedClasses ) );
		$this->assertEquals( count( $functions ), count( $parsedFunctions ) );

		foreach( $classes as $i=>$class ) {
			$this->assertEquals( $class->getName(), $parsedClasses[ $i ]->get( 'name' ) );
		}

		foreach( $functions as $i=>$function ) {
			$this->assertEquals( $function->getName(), $parsedFunctions[ $i ]->get( 'name' ) );
		}
	}

	/**
	 * @dataProvider provider
	 * @group class
	 */
	public function testClasses( $file, $classes, $functions ) {
		$parsedFile = new PT_Parse_File( $file );
		$parsedClasses = $parsedFile->get( 'classes' );

		foreach( $classes as $i=>$class ) {
			$this->assertEquals( $class->getName(), $parsedClasses[ $i ]->get( 'name' ) );
			$this->assertEquals( $class->getDocComment(), $parsedClasses[ $i ]->get( 'docbloc' ) );
			
			$aProps = $parsedClasses[ $i ]->get( 'properties' );
			$eProps = $class->getProperties();

			$this->assertEquals( count( $eProps ), count( $aProps ) );

			foreach( $eProps as $j => $eProp ) {
				$this->assertEquals( '$' . $eProp->getName(), $aProps[ $j ]->get( 'name' ) );
				$this->assertEquals( $eProp->getDocComment(), $aProps[ $j ]->get( 'docbloc' ) );
				$this->assertEquals( $eProp->isPublic(), $aProps[ $j ]->get( 'access' ) == 'public' );
				$this->assertEquals( $eProp->isProtected(), $aProps[ $j ]->get( 'access' ) == 'protected' );
				$this->assertEquals( $eProp->isPrivate(), $aProps[ $j ]->get( 'access' ) == 'private' );
				$this->assertEquals( $eProp->isStatic(), $aProps[ $j ]->get( 'static' ) );
			}

			$aMethods = $parsedClasses[ $i ]->get( 'methods' );
			$eMethods = $class->getMethods();

			foreach( $eMethods as $j => $eMethod ) {
				$aMethod = $aMethods[ $j ];
				$this->assertEquals( $eMethod->getName(), $aMethod->get( 'name' ) );
			}

			$this->assertEquals( count( $eMethods ), count( $aMethods ) );
		}
	}

	/**
	 * @dataProvider provider
	 * @group function
	 */
	public function testFunctions( $file, $classes, $functions ) {
		$parsedFile = new PT_Parse_File( $file );
		$parsedFunctions = $parsedFile->get( 'functions' );

		foreach( $functions as $i=>$function ) {
			$this->assertEquals( $function->getName(), $parsedFunctions[ $i ]->get( 'name' ) );
			$this->assertEquals( $function->getDocComment(), $parsedFunctions[ $i ]->get( 'docbloc' ) );

			$eArgs = $function->getParameters();
			$aArgs = $parsedFunctions[ $i ]->get( 'arguments' );

			$this->assertEquals( count( $eArgs ), count( $aArgs ) );


			foreach( $eArgs as $j => $eArg ) {
				$this->assertEquals( "$" . $eArg->getName(), $aArgs[ $j ]->get( "name" ) );
				$this->assertEquals( $eArg->isPassedByReference(), $aArgs[ $j ]->get( "reference" ) );
				$this->assertEquals( $eArg->isDefaultValueAvailable(), $aArgs[ $j ]->get( "default" ) != "" );
			}
		}
	}
}
