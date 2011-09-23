<?php

include dirname( dirname( __FILE__ ) ) . "/pt-parser.php";

class PT_Parse_Test extends PHPUnit_Framework_TestCase {

	private static $ref;

	public static function setUpBeforeClass() {
		self::$ref = new ReflectionClass( 'PT_Parse' );
	}

	/**
	 * @dataProvider provider
	 */
	public function testNextAll( $code ) {
		$parser = new PT_Parse( $code );
		$tokens = token_get_all( $code );

		$count = 0;
		 
		foreach( $parser as $token ) {
			$count++;
		}

		$this->assertEquals( $count, count( $tokens ) );
	}

	/**
	 * @dataProvider provider
	 */
	public function testNextMatchToken( $code ) {
		$parser = new PT_Parse( $code );
		$tokens = token_get_all( $code ); $i = 0;

		foreach( $parser as $token ) {
			$this->assertTrue( ($tokens[ $i ] == $token->token || $tokens[ $i ][ 0 ] == $token->token ) );
			$i++;
		}

	}

	/**
	 * @dataProvider provider
	 */
	public function testNextMatchVal( $code ) {
		$parser = new PT_Parse( $code );
		$tokens = token_get_all( $code ); $i = 0;

		foreach( $parser as $token ) {
			$this->assertTrue( ( $tokens[ $i ] == $token->val || $tokens[ $i ][ 1 ] == $token->val ) );
			$i++;
		}

	}

	/**
	 * Tests matching in loops of two to ensure that the loop isn't rewound
	 * automatically.
	 *
	 * @dataProvider provider
	 */
	public function testNoRewind( $code ) {
		$parser = new PT_Parse( $code );
		$tokens = token_get_all( $code ); 
		
		$i = 0; $count = count( $tokens );

		foreach( $parser as $token ) {
			foreach( $parser as $token ) {
				$i++;
				if( $i % 5 == 0 ) break;
			}
		}

		$this->assertEquals( $count, $i );
	}

	public function provider() {
		$code = Array();
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 
		$samples = opendir( $sampleDir );

		while( $path = readdir( $samples ) ) 
			if( is_file( $sampleDir . $path ) )
				$code[] = Array( file_get_contents( $sampleDir . $path ) );
		
		return $code;
	}

	/**
	 * @group current
	 * @dataProvider provider
	 */
	public function testMods( $code ) {
		$defaults = self::$ref->getDefaultProperties();
		$modList = $defaults["mod_list"];
		$i = 0; $tokens = token_get_all( $code );

		$parse = new PT_Parse( $code );

		foreach( $parse as $token ) {
			if( $token->token != T_WHITESPACE ) {
				$mods = Array();
				for( $j = $i; $j >= 0; $j-- ) {
					$curtoken = is_array( $tokens[$j] )? $tokens[$j][0] : $tokens[$j];
					if( in_array( $curtoken, $modList ) && !array_key_exists( $curtoken, $mods ) ) 
						$mods[ $curtoken ] = is_array( $tokens[$j] )? $tokens[$j][1] : $tokens[$j];
					else if( $curtoken != T_WHITESPACE && $j != $i )
						break;	
				}

				$this->assertEquals( $mods, $token->modifiers );
			}
			$i++;
		}

		$this->assertTrue( TRUE );
	}

	public function modsProvider() {
		$code = Array();
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 
		$samples = opendir( $sampleDir );

		while( $path = readdir( $samples ) ) 
			if( is_file( $sampleDir . $path ) && preg_match( '/^mods-/', $path ) )
				$code[] = Array( file_get_contents( $sampleDir . $path ) );
		
		return $code;
	}

}
