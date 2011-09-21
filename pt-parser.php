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
 * Value returned by the PT_Parse Iterator.
 *
 * @link PT_Parse. Returns details about the
 * current token.
 */ 
class PT_Parse_Token {
	public $value;
	public $token;
	public $line;
	public $modifiers;

	public function __construct( $args = Array() ) {
		$value = array_key_exists( 'value', $args )? $args['value'] : "";
		$token = array_key_exists( 'token', $args )? $args['token'] : "";
		$line = array_key_exists( 'line', $args )? $args['line'] : "";
		$modifiers = array_key_exists( 'modifiers', $args )? $args['modifiers'] : "";
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
class PT_Parse implements Iterator {

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
	protected $mods;

	/**
	 * Distance since the modifier was captured.
	 * @var Int
	 */
	protected $mod_distance;

	/**
	 * Tokens of modifiers to be captured.
	 * @var Mixed
	 */
	protected $mod_list = Array( 
		T_DOC_COMMENT,
		T_FINAL,
		T_PUBLIC,
		T_PRIVATE,
		T_PROTECTED,
		T_VAR,
		T_STATIC
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
	 *
	 * Does nothing as the iterator should remember it's state across
	 * foreach calls.
	 */
	public function rewind() {
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
	 * Returns the current key value.
	 */
	public function key() {
		if( !$this->valid() ) return NULL;

		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 0 ];
		else return $this->tokens[ $this->position ];
	}	

	/**
	 * Returns a PT_Parse_Token instance or NULL in case the iterator has overshot.
	 * 
	 * @return PT_Parse_Token|Null 
	 */
	public function current() {
		if( !$this->valid() ) return NULL;

		return new PT_Parse_Token( Array( 
			'token' => $this->key(),
			'value' => $this->value(),
			'modifiers' => $this->mods,
			'line' => $this->line()
		) );
	}	
	/**#@-*/

	/**
	 * Return the current value of the token.
	 */
	protected function value() {
		if( !$this->valid() ) return NULL;

		if( is_array( $this->tokens[ $this->position ] ) )
			$value = $this->tokens[ $this->position ][ 1 ];
		else $value = $this->tokens[ $this->position ];
	}

	/**
	 * Saves modifiers for future tokens.
	 *
	 * Saves modifiers from the mod_list, resets in case they 
	 * become inapplicable.
	 */
	protected function modifiers() {
		if( in_array( $this->key(), $this->mod_list ) ) {
			$this->mods[ $this->key() ] = $this->value();
			$this->mod_distance = 0;
		} else if( $this->key() != T_WHITESPACE ) {
			$this->mod_distance++;
			if( $this->mod_distance > 0 )
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
		while( $this->token() != $token && !$this->end() )
			$this->next();
	}

	/**
	 * Find and skip the next { ... } block.
	 */
	public function skip_block() {
		$balancer = -1;
		$this->skip_till( '{' );

		while( $balancer < 0 && $this->next() ) {
			if( $this->token() == '{' )
				$balancer--;
			else if( $this->token() == '}' )
				$balancer++;
		}	
	}
}

class PT_Parse_File extends PT_Parse {
	private $classes;
	private $functions;
	private $constants;
	private $globals;

	public function __construct( $file ) {
	}

	public function getClasses() {
		return $this->classes;
	}

	public function getFunctions() {
	}
}

class PT_Parse_Class extends PT_Parse {
}

class PT_Parse_Function extends PT_Parse {
}

class PT_Parse_Method extends PT_Parse_Function {
}

class PT_Parse_Argument extends PT_Parse {
}

class PT_Parse_Property extends PT_Parse {
}

