<?php

/**
 * Tests for the base parser that iterates over the tokens.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage ptests 
 */

include dirname( dirname( __FILE__ ) ) . "/pt-parser.php";

class PT_Parser_Test extends PHPUnit_Framework_TestCase {

	private static $ref;

	public static function setUpBeforeClass() {
		self::$ref = new ReflectionClass( 'PT_Parser' );
	}

	/**
	 * @dataProvider provider
	 * @group iterator
	 */
	public function testNextAll( $code ) {
		$parser = new PT_Parser( $code );
		$tokens = token_get_all( $code );

		$count = 0;
		 
		foreach( $parser as $token ) {
			$count++;
		}

		$this->assertEquals( $count, count( $tokens ) );
	}

	/**
	 * @dataProvider provider
	 * @group iterator
	 */
	public function testNextMatchToken( $code ) {
		$parser = new PT_Parser( $code );
		$tokens = token_get_all( $code ); $i = 0;

		foreach( $parser as $token ) {
			$this->assertTrue( ($tokens[ $i ] == $token->token || $tokens[ $i ][ 0 ] == $token->token ) );
			$i++;
		}

	}

	/**
	 * @dataProvider provider
	 * @group iterator
	 */
	public function testNextMatchVal( $code ) {
		$parser = new PT_Parser( $code );
		$tokens = token_get_all( $code ); $i = 0;

		foreach( $parser as $token ) {
			$this->assertTrue( ( $tokens[ $i ] == $token->val || $tokens[ $i ][ 1 ] == $token->val ) );
			$i++;
		}

	}

	/**
	 * @dataProvider provider
	 * @group iterator
	 */
	public function testNoRewind( $code ) {
		$parser = new PT_Parser( $code );
		$tokens = token_get_all( $code ); 
		
		$i = 0; $count = count( $tokens );

		foreach( $parser as $token ) {
			$i++;
		}

		foreach( $parser as $token ) {
			$i++;
		}

		$this->assertEquals( $count * 2, $i );
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
	 * @dataProvider provider
	 * @group mods
	 */
	public function testMods( $code ) {
		$defaults = self::$ref->getDefaultProperties();
		$modList = $defaults["mod_list"];
		$i = 0; $tokens = token_get_all( $code );

		$parse = new PT_Parser( $code );

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

	/**
	 * @dataProvider provider
	 * @group skip
	 */
	public function testSkipStart( $code ) {
		$tokens = token_get_all( $code );
		$length = count( $tokens ); $i = 0;
		$parser = new PT_Parser( $code );

		$nextToken = T_ECHO;
		$parser->skip_till( $nextToken );

		$this->assertTrue(  !$parser->valid() || ( $parser->key() == $nextToken ) );

		while( $i < $length && $this->getVal( $tokens[ $i ], 0 ) != $nextToken )
			$i++;

		while( $i < $length ) {
			$this->assertEquals( $parser->key(), $this->getVal( $tokens[ $i ], 0 ) );	

			$i++; $parser->next();
		}

		$this->assertTrue( !$parser->valid() );	
	}

	/**
	 * @dataProvider provider
	 * @group skip
	 */
	public function testSkipEnd( $code ) {
		$parser = new PT_Parser( $code );
		foreach( $parser as $token ) {;}

		$parser->skip_till( T_PUBLIC );

		$this->assertTrue( !$parser->valid() );
	}

	/**
	 * @dataProvider provider
	 * @group skip
	 */
	public function testSkipMiddle( $code ) {
		$tokens = token_get_all( $code );
		$length = count( $tokens ); $i = 0;
		$parser = new PT_Parser( $code );

		$skipLength = rand( 0, $length );
	
		for( $i = 0; $i < $skipLength; $i++ )
			$parser->next();

		$nextToken = T_ECHO;
		$parser->skip_till( $nextToken );

		$this->assertTrue(  !$parser->valid() || ( $parser->key() == $nextToken ) );

		while( $i < $length && $this->getVal( $tokens[ $i ], 0 ) != $nextToken )
			$i++;

		while( $i < $length ) {
			$this->assertEquals( $parser->key(), $this->getVal( $tokens[ $i ], 0 ) );	

			$i++; $parser->next();
		}

		$this->assertTrue( !$parser->valid() );	
	}

	/**
	 * @dataProvider provider
	 * @group skip
	 */
	public function testSkipNottoken( $code ) {
		$tokens = token_get_all( $code );
		$parser = new PT_Parser( $code );

		$nextToken = '!!!!';
		$parser->skip_till( $nextToken );

		$this->assertTrue( !$parser->valid() );	
	}

	public function getVal( $token, $i ) {
		if( is_array( $token ) )
			return $token[$i];
		else
			return $token;
	}

	/**
	 * @dataProvider provider
	 * @group skip
	 */
	public function testNoSkip( $code ) {
		$tokens = token_get_all( $code );
		$length = count( $tokens ); $i = 0;
		$parser = new PT_Parser( $code );

		$skipLength = rand( 0, $length );
	
		for( $i = 0; $i < $skipLength; $i++ ) {
			$parser->next();
		}

		$parser->skip_till( $parser->key() );

		while( $i < $length ) {
			$this->assertEquals( $parser->key(), $this->getVal( $tokens[ $i ], 0 ) );
			$parser->next(); $i++;
		}
		
		$this->assertTrue( !$parser->valid() );	
	}
}
