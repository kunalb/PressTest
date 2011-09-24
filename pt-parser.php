<?php

/**
 * Classes for Parsing code. 
 *
 * Return parsed functions, classes, globals and constants.
 *
 * @version 0.2
 * @author Kunal Bhalla
 * @package PressTest
 * @subPackage PT_Parser 
 */

/**
 * Value returned by the PT_Parser Iterator.
 *
 * @link PT_Parser. Returns details about the
 * current token.
 */ 
class PT_Parser_Token {
	public $val;
	public $token;
	public $line;
	public $modifiers;

	public function __construct( $args = Array() ) {
		$this->val = array_key_exists( 'val', $args )? $args['val'] : "";
		$this->token = array_key_exists( 'token', $args )? $args['token'] : "";
		$this->line = array_key_exists( 'line', $args )? $args['line'] : "";
		$this->modifiers = array_key_exists( 'modifiers', $args )? $args['modifiers'] : "";
	}

	public function get_modifier( $token ) {
		if( isset( $this->modifiers[$token] ) )
			return $this->modifiers[$token];
		else return false;	
	}
}

/**
 * Smart iterator for tokens obtained parsed code.
 */ 
class PT_Parser implements Iterator {

	/** 
	 * Token list
	 * @var Array()
	 */
	protected $tokens;

	/**
	 * Current Position
	 * @var Int
	 */
	protected $position;

	/**
	 * Possible modifiers for upcoming tokens.
	 * @var Array
	 */
	protected $mods = Array();

	/**
	 * Distance since the modifier was captured.
	 * @var Int
	 */
	protected $mod_distance = 0;

	/**
	 * Tokens of modifiers to be captured.
	 * @var Mixed
	 */
	protected $mod_list = Array( 
		T_DOC_COMMENT,
		T_CONST,
		T_FINAL,
		T_PUBLIC,
		T_PRIVATE,
		T_PROTECTED,
		T_VAR,
		T_STATIC,
		'&'
	);	

	/**#@+
	 * Function required for the Iterator interface.
	 */
	/**
	 * Constructor -- tokenizes code.
	 * @param String $data Code to be parsed.
	 */
	public function __construct( $data ) {
		$this->position = 0;
		$this->tokens = token_get_all( $data );
		$this->mods = Array();
	}

	/**
	 * Checks whether the iterator can still move forward.
	 */
	public function valid() {
		return isset( $this->tokens[ $this->position ] );
	}

	/**
	 * Return to the start.
	 */
	public function rewind() {
		$this->position = 0;
	}

	/**
	 * Moves to the next token and runs an 'each' internal call.
	 */
	public function next() {
		$this->position++;

		if( $this->valid() )
			$this->each();
	}

	/**
	 * Returns the current key val.
	 */
	public function key() {
		if( !$this->valid() ) return NULL;

		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 0 ];
		else return $this->tokens[ $this->position ];
	}	

	/**
	 * Returns a PT_Parser_Token instance or NULL in case the iterator has overshot.
	 * 
	 * @return PT_Parser_Token|Null 
	 */
	public function current() {
		if( !$this->valid() ) return NULL;

		return new PT_Parser_Token( Array( 
			'token' => $this->key(),
			'val' => $this->val(),
			'modifiers' => $this->mods,
			'line' => $this->line()
		) );
	}	
	/**#@-*/

	/**
	 * Return the current val of the token.
	 */
	protected function val() {
		if( !$this->valid() ) return NULL;

		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 1 ];
		else return $this->tokens[ $this->position ];
	}

	/**
	 * Saves modifiers for future tokens.
	 *
	 * Saves modifiers from the mod_list, resets in case they 
	 * become inapplicable.
	 */
	protected function modifiers() {
		if( in_array( $this->key(), $this->mod_list ) ) {
			$this->mods[ $this->key() ] = $this->val();
			$this->mod_distance = 0;
		} else if( $this->key() != T_WHITESPACE ) {
			$this->mod_distance++;
			if( $this->mod_distance > 1 )
				$this->reset_modifiers();
		}
	}

	/**
	 * Resets all modifiers
	 */
	protected function reset_modifiers() {
		$this->mods = Array();
	}

	/**
	 * Run on all tokens internally. Useful in derived classes. 
	 */
	protected function each() {
		$this->modifiers();
	}

	/**
	 * Returns the line of the current token.
	 */
	protected function line() {
		if( !$this->valid() ) return NULL;

		if( is_array( $this->tokens[ $this->position ] ) && isset( $this->tokens[ $this->position ][ 2 ] ) )
			return $this->tokens[ $this->position ][ 2 ];
		else return NULL;
	}

	/**
	 * Skip tokens till the specified token is reached.
	 *
	 * Useful for exploratory parsing
	 */
	public function skip_till( $token ) {
		while( $this->key() != $token && $this->valid() ) {
			$this->next();
		}
	}
}

class PT_Parse_File {
	private $parser;
	private $file = '';
	private $classes = Array();
	private $functions = Array();
	private $constants = Array();
	private $globals = Array();

	public function __construct( $file ) {
		$code = file_get_contents( $file );
		if( $code !== FALSE ) {
			$this->parser = new PT_Parser( file_get_contents( $file ) );
			$this->file = $file;
		}

		$this->parse();
	}

	private function parse() {
		foreach( $this->parser as $token ) {
			switch( $token ) {
				case T_CLASS:
					$this->classes[] = new PT_Parse_Class( $this->parser );
					break;
				case T_FUNCTION:
					$this->functions[] = new PT_Parse_Function( $this->parser );
					break;
				case T_GLOBAL:
					$this->globals[] = new PT_Parse_Global( $this->parser );
					break;
				case T_STRING:
					if( $this->parser->val() == 'define' )
						$this->constants[] = new PT_Parse_Constant( $this->parser );
					break;	
			}
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'constants', 'globals', 'classes', 'functions' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Class {
	private $parser;
	private $methods;
	private $properties;

	public function __construct( $parser ) {
		if( get_class( $parser ) != PT_Parser )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$parser->skip_till( T_CLASS );	

	}
}

class PT_Parse_Function {
}

class PT_Parse_Method extends PT_Parse_Function {
}

class PT_Parse_Argument {
}

class PT_Parse_Property {
}

class PT_Parse_Global {
}
