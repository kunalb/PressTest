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
		else return '';	
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

	/**
	 * State for the block function.
	 * @var Array[String]Bool
	 */
	protected $inBlock = Array(); 

	/**
	 * Braces counter for the block function.
	 * @var Array[String]Int
	 */
	protected $braceBlock = Array();

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
	 * @return PT_Parser $this Allows chaining
	 */
	public function next() {
		$this->position++;

		if( $this->valid() )
			$this->each();

		return $this;	
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
	public function val() {
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
	 *
	 * @return PT_Parser $this Useful for chaining
	 */
	public function skip_till( $token ) {
		while( $this->key() != $token && $this->valid() ) {
			$this->next();
		}
		return $this;
	}

	/**
	 * Concatenates tokens till the given value, stripping any white space.
	 *
	 * @return String token value
	 */
	public function grab_till( $tokens ) {
		$grabbed = "";

		while( !in_array($this->key(), $tokens) && $this->valid() ) {
			$grabbed .= $this->val();
			$this->next();
		}

		return $grabbed;
	}

	/** 
	 * Returns true while till the _upcoming_ pair of braces is matched.
	 *
	 * Useful for parsing blocks encapsulated using { }: for example,
	 * to parse a function definition. Should only be used
	 * from the _same place_ in a single file: identifying which block must be 
	 * managed is done on the basis of uniqueness of the line number and the file name.
	 *
	 * Can also be passed an id to over-ride the auto generated id when the 1st stack
	 * frame from `debug_backtrace` doesn't prove sufficient for identifing the final 
	 * caller: for example from a constructor of another class.
	 *	
	 * @param String $id The identifier for the caller.
	 * @return Bool True while the block hasn't ended.
	 */
	public function block( $brackets = Array( "{", "}" ), $id = '' ) {
		$lbracket = $brackets[0];
		$rbracket = $brackets[1];

		if( $id == '' ) {
			$backtrace = debug_backtrace(false);
			$id = md5( $backtrace[0]['line'] . "_" . $backtrace[0]['file'] );
		}
	
		if( !array_key_exists( $id, $this->inBlock ) )
			$this->inBlock[ $id ] = false;

		if( !array_key_exists( $id, $this->braceBlock ) )
			$this->braceBlock[ $id ] = -1;

		if( !$this->inBlock[ $id ] && $this->key() == $lbracket ) { //Opened the function
			$this->inBlock[ $id ] = true; 
		} else if( $this->inBlock[ $id ] && $this->key() == $lbracket ) {
			$this->braceBlock[ $id ]--;
		} else if( $this->inBlock[ $id ] && $this->key() == $rbracket ) {
			$this->braceBlock[ $id ]++;
		} 

		if( $this->braceBlock[ $id ] == 0 && $this->inBlock[ $id ] ) {
			$this->inBlock[ $id ] = false;
			return true;
		} else if( $this->braceBlock[ $id ] == 0 && !$this->inBlock[ $id ] ) {
			return false;
		} else if( $this->braceBlock[ $id ] == -1 && !$this->inBlock[ $id ] ) {
			return true;
		} else if( $this->inBlock[ $id ] ) {
			return true;
		} else {
			return false;
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

		$this->parser = $parser;
		$this->parser->skip_till( T_CLASS );	
	
		$this->parse();
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'methods', 'properties' ) ) )
			return $this->$what;

		return NULL;
	}

	private function parse() {
		foreach( $this->parser as $token ) {
			switch( $token ) {
				case T_FUNCTION:
					$this->methods[] = new PT_Parse_Method( $this->parser );
					break;
				case T_VARIABLE:
					$this->properties[] = new PT_Parse_Property( $this->parser );
					break;	
			}
		}
	}
}

class PT_Parse_Function {
	private $parser;
	private $arguments;
	private $globals;
	private $name;
	private $docbloc;
	private $constants;

	public function __construct( $parser ) {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_FUNCTION );	
	
		$this->parse();
	}

	private function parse() {
		$this->docbloc = $this->parser->current()->get_modifier( T_DOC_COMMENT );
		$token = $this->parser->skip_till( T_STRING )->current();
		$this->name = $token->val;
		
		while( $this->parser->block( '()' ) ) {
			if( $this->parser->key() == T_VARIABLE )
				$this->arguments[] = new PT_Parse_Argument( $this->parser );
			$this->parser->next();
		}

		while( $this->parser->block() ) {
			if( $this->parser->key() == T_GLOBAL )
				$this->globals[] = new PT_Parse_Global( $parser );
			else if( $this->parser->key() == T_STRING && $this->parser->val() == 'define' )
				$this->constants = new PT_Parse_Constant( $parser );

			$this->parser->next();
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'arguments', 'globals', 'name', 'docbloc', 'constants' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Method extends PT_Parse_Function {
}

class PT_Parse_Argument {
	private $parser;
	private $name;
	private $reference;
	private $default;

	public function __construct( $parser ) {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_VARIABLE );	
	
		$this->parse();
	}

	private function parse() {
		$token = $this->parser->current();
		$this->name = $token->val;

		while( $this->parser->val() != ')' && $this->parser->val() != ',' ) {
			$this->parser->next();
			if( $this->parser->val() == '=' ) {
				$this->parser->next();
				$this->default = $this->parser->grab_till( Array( ',', ')' ) );
			}
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'name', 'reference', 'default' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Property {
}

class PT_Parse_Global {
}

class PT_Parse_Constant {
}
