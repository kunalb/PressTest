<?php

/**
 * Tests for the base parser that iterates over the tokens.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage ptests 
 */

include_once dirname( dirname( __FILE__ ) ) . "/pt-parser.php";

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
	 * @depends testNextAll
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
	 * @depends testNextMatchToken
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
	 * @depends testNextAll
	 */
	public function testRewind( $code ) {
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
	 * @group grab
	 */
	public function testGrabMiddle( $code ) {
		$tokens = token_get_all( $code );
		$length = count( $tokens ); $i = 0;
		$parser = new PT_Parser( $code );

		$skipLength = rand( 0, $length );
	
		for( $i = 0; $i < $skipLength; $i++ )
			$parser->next();

		$nextToken = Array( T_ECHO );
		$grabbed = $parser->grab_till( $nextToken );
		$testGrabbed = "";

		$this->assertTrue(  !$parser->valid() || in_Array( $parser->key(), $nextToken ) );

		while( $i < $length && !in_Array( $this->getVal( $tokens[ $i ], 0 ), $nextToken ) ) {
			$testGrabbed .= $this->getVal( $tokens[ $i ], 1 );
			$i++;
		}

		$this->assertEquals( $testGrabbed, $grabbed );

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

	public function blockProvider() {
		$code = Array();
		$sampleDir = dirname( __FILE__ ) . '/samples/'; 
		$files = Array( $sampleDir . "class-wp-filesystem-direct.php" );

		foreach( $files as $file )
			$code[] = Array( file_get_contents( $file ) );
		
		return $code;
	}

	/**
	 * @group block
	 * @dataProvider blockProvider
	 */
	public function testBlockSimple( $code ) {
		$tokens = token_get_all( $code );

		$parser = new PT_Parser( $code );

		while( $parser->block() ) 
			$parser->next();

		$this->assertEquals( $parser->key(), T_WHITESPACE );	

		$parser->skip_till( T_DOC_COMMENT );

		$this->assertEquals( $parser->val(), "/** @stop b1 */" );
	}

	/**
	 * Checks the total number of blocks in the second level.
	 * @group block
	 * @dataProvider blockProvider
	 */
	public function testBlockComplex( $code ) {
		$parser = new PT_Parser( $code );
		$fnCount = 0; $tokens = token_get_all( $code );
		$blockCount = 0;

		foreach( $tokens as $token )
			if( $this->getVal( $token, 0 ) == T_FUNCTION )
				$fnCount++;
		
		while( $parser->block() ) {
			if( $parser->key() == T_FUNCTION ) {
				$blockCount++;
				while( $parser->block() ) 
					$parser->next();
			}
			$parser->next();
		}

		$this->assertEquals( $blockCount, $fnCount );
	}

	/**
	 * Checks the total number of blocks in the third level.
	 * @group block
	 */
	public function testBlockComplex2() {
		$code = file_get_contents( dirname( __FILE__ ) . '/samples/' . "kb-admin.php" );

		$parser = new PT_Parser( $code );
		$fnCount = 0; $tokens = token_get_all( $code );
		$blockCount = 0;

		foreach( $tokens as $token )
			if( $this->getVal( $token, 0 ) == T_FUNCTION )
				$fnCount++;
		
		while( $parser->block() ) {
			if( $parser->key() == T_CLASS ) {
				while( $parser->block() ) {
					if( $parser->key() == T_FUNCTION ) {
						$blockCount++;
						while( $parser->block() ) 
							$parser->next();
					}
					$parser->next();
				}
			}
			$parser->next();
		}

		$this->assertEquals( $blockCount, $fnCount );
	}

	/**
	 * @group block
	 */
	function testBlockAltSimple() {
		$code = file_get_contents( dirname( __FILE__ ) . '/samples/' . "plugins.php" );

		$parser = new PT_Parser( $code );
		$contents = '';
		$parser->skip_till( '(' );

		while( $parser->block( "()" ) ) {
			$contents .= $parser->val();
			$parser->next();
		}

		$this->assertEquals( "('./admin.php')", $contents );	
	}
}
