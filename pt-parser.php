<?php

define( 'PT_DEBUG_SHOW_PARSED', false );
define( 'PT_DEBUG_SHOW_BLOCKS', false );

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
		T_FINAL,
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
			if( $this->mod_distance != 0 )
				$this->reset_modifiers();

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
	 * Concatenates tokens till the given value.
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

		if( PT_DEBUG_SHOW_BLOCKS )
			echo $this->val();

		$backtrace = debug_backtrace(false);
		$id = ( $backtrace[0]['line'] . "_" . $backtrace[0]['file'] . "-$id" );
	
		if( !array_key_exists( $id, $this->inBlock ) ) {
			$this->inBlock[ $id ] = false;
		}

		if( !array_key_exists( $id, $this->braceBlock ) )
			$this->braceBlock[ $id ] = -1;

		if( !$this->inBlock[ $id ] && $this->val() == $lbracket ) { //Opened the function
			$this->inBlock[ $id ] = true; 
			if( PT_DEBUG_SHOW_BLOCKS )
				echo "[[S" . $this->braceBlock[ $id ] . " ]]";
		} else if( $this->inBlock[ $id ] && $this->val() == $lbracket ) {
			$this->braceBlock[ $id ]--;
			if( PT_DEBUG_SHOW_BLOCKS )
				echo "[[ " . $this->braceBlock[ $id ] . " ]]";
		} else if( $this->inBlock[ $id ] && $this->val() == $rbracket ) {
			$this->braceBlock[ $id ]++;
			if( PT_DEBUG_SHOW_BLOCKS )
				echo "[[ " . $this->braceBlock[ $id ] . " ]]";
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
	protected $parser;
	protected $file = '';
	protected $classes = Array();
	protected $functions = Array();
	protected $name;

	public function __construct( $file ) {
		$code = file_get_contents( $file );
		if( $code !== FALSE ) {
			$this->parser = new PT_Parser( file_get_contents( $file ) );
			$this->file = $file;
			$this->name = basename( $file );
		}

		$this->parse();
	}

	protected function parse() {
		foreach( $this->parser as $token ) {
			switch( $token->token ) {
				case T_CLASS:
					$this->classes[] = new PT_Parse_Class( $this->parser );
					if( PT_DEBUG_SHOW_PARSED )
						echo "\n -- Parsed a class. At " . $token->line . "-" . $this->parser->current()->line . ".";
					break;
				case T_FUNCTION:
					$this->functions[] = new PT_Parse_Function( $this->parser );
					if( PT_DEBUG_SHOW_PARSED )
						echo "\n -- Parsed a function. At " . $token->line . "-" . $this->parser->current()->line . ".";
					break;
			}
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'constants', 'globals', 'classes', 'functions', 'name', 'file' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Class {
	protected $parser;
	protected $methods;
	protected $properties;
	protected $name;
	protected $abstract;
	protected $extends;
	protected $docbloc;
	protected $implements;

	public function __construct( $parser ) {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_CLASS );	
	
		$this->parse();
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'methods', 'properties', 'name', 'abstract', 'extends', 'docbloc' ) ) )
			return $this->$what;

		return NULL;
	}

	protected function parse() {
		$this->abstract = ($this->parser->current()->get_modifier( T_ABSTRACT ) != null);
		$this->docbloc = $this->parser->current()->get_modifier( T_DOC_COMMENT );
		$this->name = $this->parser->skip_till( T_STRING )->val();

		while( $this->parser->block( '{}', $this->name ) ) {
			$token = $this->parser->current();
			switch( $this->parser->key() ) {
				case T_EXTENDS: 
					$this->extends = $this->parser->skip_till( T_STRING )->val();
					break;
				case T_IMPLEMENTS:
					$this->implements = $this->parser->skip_till( T_STRING )->val();
					break;	
				case T_FUNCTION:
					$this->methods[] = new PT_Parse_Method( $this->parser, $this->name );
					if( PT_DEBUG_SHOW_PARSED )
						echo "\n -- Parsed a method. At " . $token->line . "-" . $this->parser->current()->line . ".";
					break;
				case T_VARIABLE:
					$this->properties[] = new PT_Parse_Property( $this->parser );
					if( PT_DEBUG_SHOW_PARSED )
						echo "\n -- Parsed a property. At " . $token->line . "-" . $this->parser->current()->line . ".";
					break;	
				default: 
					$this->parser->next();	
			}
		}
	}
}

class PT_Parse_Function {
	protected $parser;
	protected $arguments;
	protected $globals;
	protected $name;
	protected $docbloc;
	protected $constants;
	protected $reference;

	public function __construct( $parser ) {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_FUNCTION );	
	
		$this->parse();
	}

	protected function parse() {
		$this->docbloc = $this->parser->current()->get_modifier( T_DOC_COMMENT );
		$token = $this->parser->skip_till( T_STRING )->current();
		$this->reference = ($this->parser->current()->get_modifier( '&' ) == null)? FALSE : TRUE;
		$this->name = $token->val;

		while( $this->parser->block( '()', $this->name . '()' ) ) {
			$token = $this->parser->current();
			if( $this->parser->key() == T_VARIABLE )
				$this->arguments[] = new PT_Parse_Argument( $this->parser );
			else	
				$this->parser->next();
			
			if( PT_DEBUG_SHOW_PARSED )
				echo "\n -- Parsed arguments " . $token->line . "-" . $this->parser->current()->line . ".";
		}

		while( $this->parser->block( '{}', $this->name . '{}' ) ) {
			$this->parser->next();
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'arguments', 'name', 'docbloc', 'reference' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Method extends PT_Parse_Function {
	protected $access = 'public';
	protected $static = false;
	protected $final = false;
	protected $class;

	public function __construct( $parser, $class ) {
		$this->class = $class;
		parent::__construct( $parser );
	}

	public function parse() {
		if( $this->parser->current()->get_modifier( T_PRIVATE ) != null )
			$this->access = 'private';
		else if( $this->parser->current()->get_modifier( T_PROTECTED ) != null )
			$this->access = 'protected';
		else 
			$this->access = 'public';
		
		$this->static = ($this->parser->current()->get_modifier( T_STATIC ) != null);
		$this->final = ($this->parser->current()->get_modifier( T_FINAL ) == null) ? FALSE : TRUE ;

		$this->docbloc = $this->parser->current()->get_modifier( T_DOC_COMMENT );
		$token = $this->parser->skip_till( T_STRING )->current();
		$this->reference = ($this->parser->current()->get_modifier( '&' ) == null)? FALSE : TRUE;

		$this->name = $token->val;

		$blockid = $this->class . $this->name . '()';
		while( $this->parser->block( '()', $blockid ) ) {
			$token = $this->parser->current();
			if( $this->parser->key() == T_VARIABLE )
				$this->arguments[] = new PT_Parse_Argument( $this->parser );
			else	
				$this->parser->next();
			
			if( PT_DEBUG_SHOW_PARSED )
				echo "\n -- Parsed arguments " . $token->line . "-" . $this->parser->current()->line . ".";
		}

		while( $this->parser->block( '{}', $this->class . $this->name . '{}' ) ) {
			$this->parser->next();
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'arguments', 'globals', 'name', 'docbloc', 'constants', 'access', 'static' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Argument {
	protected $parser;
	protected $name;
	protected $reference = false;
	protected $default = '';

	public function __construct( $parser, $blockid = '') {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_VARIABLE );	
	
		$this->parse();
	}

	protected function parse() {
		$token = $this->parser->current();
		$this->name = $token->val;
		$this->reference = ($token->get_modifier( '&' ) == NULL)? false : true;
			
		while( !in_array($this->parser->val(),  Array( ")", "," )) && $this->parser->valid() ) {
			$this->parser->next();
			
			if( $this->parser->val() == '=' ) {
				$this->parser->next();
				/* Grab the mixed value till a comma or an unbalanced bracket. */
				$default = "";
				$balance = 0;
				while( !( $balance == 0 && in_array( $this->parser->val(), Array( ',', ')' ) ) ) ) {
					switch( $this->parser->val() ) {
						case '(': $balance--; break;
						case ')': $balance++; break;
						default: 
							$default .= $this->parser->val();
					}
					$this->parser->next();
				}

				$this->default = trim( $default );
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
	protected $parser;
	protected $name;
	protected $access = 'public';
	protected $default = '';
	protected $docbloc = '';
	protected $static = false;

	public function __construct( $parser ) {
		if( get_class( $parser ) != 'PT_Parser' )
			throw new BadMethodCallException( "Incorrect argument passed to PT_Parse_Class. PT_Parser required." );

		$this->parser = $parser;
		$this->parser->skip_till( T_VARIABLE );	
	
		$this->parse();
	}

	protected function parse() {
		$this->docbloc = $this->parser->current()->get_modifier( T_DOC_COMMENT );
		$this->static = ($this->parser->current()->get_modifier( T_STATIC ) == null) ? FALSE : TRUE ;
		$token = $this->parser->current();
		$this->name = $token->val;
		if( $this->parser->current()->get_modifier( T_PRIVATE ) != null )
			$this->access = 'private';
		else if( $this->parser->current()->get_modifier( T_PROTECTED ) != null )
			$this->access = 'protected';
		else 
			$this->access = 'public';

			
		while( !in_array($this->parser->val(),  Array( ";" )) && $this->parser->valid() ) {
			$this->parser->next();
			
			if( $this->parser->val() == '=' ) {
				$this->parser->next();
				$this->default = trim( $this->parser->grab_till( Array( ';' ) ) );
			}
		}
	}

	public function get( $what ) {
		if( in_array( $what, Array( 'name', 'access', 'default', 'docbloc', 'static' ) ) )
			return $this->$what;

		return NULL;
	}
}

class PT_Parse_Global {
	/** ToDo Decide whether to implement or not */
}

class PT_Parse_Constant {
	/** Todo Decide whether to implement or not */
}

class PT_Parse_Interface {
	/** Todo Decide whether to implement or not */
}
