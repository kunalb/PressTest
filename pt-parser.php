<?php 

/**
 * Parses PHP code for classes and function definitions.
 *
 * @package PressTest
 * @version 0.2
 */

/*

add_action( 'shutdown', function(){
	KB_Debug( memory_get_peak_usage( true ) );
}, 1000 );

*/

/**
 * Parse provided code and return required values.
 */
class PT_Parser {

	/**
	 * The raw code provided
	 * @var String
	 */
	private $data;

	/**
	 * Tokenized version of code
	 * @var Array
	 */
	private $tokens;

	/**
	 * Number of tokens
	 * @var Int
	 */
	private $token_length;

	/**
	 * Current postition in tokenized string.
	 * @var Int
	 */
	private $position;

	/**
	 * Extracted classes
	 * @var Array[String] PT_Parse_Class
	 */
	private $classes;

	/**
	 * Extracted functions
	 * @var Array[String] PT_Parse_Function
	 */
	private $functions;

	/** 
	 * The original file 
	 * @var String 
	 */
	private $file; 

	/**
	 * State modifiers -- good for looking back
	 * @var Array[String]Bool
	 */
	private $mods; 
	
	/**
	 * Constructor. Starts parsing.
	 * @param String $file File to be parsed
	 */
	public function __construct( $file ) {
		$this->data = file_get_contents( $file );
		$this->file = $file;
		$this->position = -1;
		$this->tokens = token_get_all( $this->data );
		$this->token_length = count( $this->tokens );

		$this->parse();
	}

	/**
	 * Parse and split data.
	 */
	private function parse() {
		while( $this->next() ) {
			//KB_Debug( token_name( $this->token() ), $this->value() );
			switch( $this->token() ) {
				case T_ABSTRACT: 
					$this->mods['abstract'] = true;
					break;
				case T_DOC_COMMENT: 
					$this->mods['comment'] = $this->value();
					break;	
				case T_CLASS: 
					$this->classes[] = $this->parse_class();
					break;
				case T_FUNCTION:
					$this->functions[] = $this->parse_function(); 	
					break;
				case T_WHITESPACE:
					break;	
				default:
					$this->mods = Array();
			}
		}
	}

	/**
	 * Parse function once called at function start.
	 * @return PT_Parse_Function
	 */
	private function parse_function() {
		$fn = new PT_Parse_Function();

		$fn->file = $this->file;

		if( array_key_exists( 'abstract', $this->mods ) && $this->mods['abstract'] )
			$fn->abstract = true;
		else $fn->abstract = false;	

		if( array_key_exists( 'comment', $this->mods ) && !empty( $this->mods['comment'] ) )
			$fn->comment = $this->mods[ 'comment' ];

		$this->mods = Array();


		while( $this->token() != T_STRING )
			$this->next();

		$fn->name = $this->value();
		$fn->args = $this->parse_arguments();
		$fn->content = $this->parse_till_brace();

		return $fn;
	}

	/**
	 * Parse method
	 * @return PT_Parse_Method
	 */
	private function parse_method() {
		$m = $this->parse_function();
		return $m;
	}

	/**
	 * Parse class
	 * @return PT_Parse_Class
	 */
	private function parse_class() {
		$c = new PT_Parse_Class();

		$c->file = $this->file;
		if( array_key_exists( 'abstract', $this->mods ) && $this->mods['abstract'] )
			$c->abstract = true;
		else $c->abstract = false;	

		if( array_key_exists( 'comment', $this->mods ) && !empty( $this->mods['comment'] ) )
			$c->comment = $this->mods[ 'comment' ];

		$this->mods = Array();

		while( $this->token() != T_STRING )
			$this->next();

		$c->name = $this->value();
		
		$this->next(); $this->next();	

		if( $this->token() == T_EXTENDS ) {
			$this->next(); $this->next();	
			$c->extends = $this->value();
		}

		//Now at the opening {
		
		while( !$this->token() != '}' ) {
			$this->next();
			switch( $this->token() ) {
				case T_STATIC:
					$this->mods[ 'static' ] = true;
					break;
				case T_PUBLIC:
				case T_PRIVATE:
				case T_PROTECTED:
					$this->mods[ 'access' ] = $this->value();
					break;
				case T_VAR: 	 
					$this->mods[ 'access' ] = 'public';
					break;
				case T_FUNCTION: 	
					$c->methods[] = $this->parse_method();
					break;
				case T_VARIABLE:	
					$var = new PT_Parse_Var;
					if( array_key_exists( 'static', $this->mods ) && $this->mods[ 'static' ] )
						$var->static = true;
					else $var->static = false;
					
					if( array_key_exists( 'access', $this->mods ) )
						$var->access = $this->mods[ 'access' ];
					else $var->access = 'public';

					$this->properties[] = $var;
				case T_WHITESPACE: 
					break;
				case '=':
					$this->next(); $this->next();
					$this->properties[ count($this->properties) - 1 ]->default = $token->value(); 
					break;	
				default: 
					$this->mods = Array();		
			}
		}

		return $c;
	}

	/**
	 * Parse function, method arguments
	 * @return Array PT_Parse_Arg
	 */
	private function parse_arguments() {
		$arglist = Array(); $i = 0;

		while( $this->token() != '(' )
			$this->next();
		
		while( $this->next() && $this->token() != ')' ) { 
			switch( $this->token() ) {
				case '&': 
					$this->mods[ 'ref' ] = true;
					break;
				case T_VARIABLE:
					$arglist[ $i ] = new PT_Parse_Arg();
					$arglist[ $i ]->name = $this->value();

					if( array_key_exists( 'ref', $this->mods ) && $this->mods['ref'] )
						$arglist[ $i ]->ref = true;
					break;
				case ',':
					$i++;
					$this->mods = Array();
					break;	
				case '=':
					$this->next();
					$this->next();
					$arglist[ $i ]->default = $this->value();
					break;	
			} 
		}
		
		return $arglist;
	}

	/**
	 * Moves parser forward till closing brace. (Grab the function body)
	 */
	private function parse_till_brace() {
		$count = 0; $str = "{";

		while( $this->token() != '{' ) 
			$this->next();
		
		while( $count != -1 ) {
			$this->next();
			switch( $this->token() ) {
				case '{':
					$count++;
					break;
				case '}':
					$count--;
					break;
			}
			$str .= $this->value();
		}

		$this->next();

		return $str;
	}

	/**
	 * Move to next token.
	 * @return Bool True if it moved, false in case at end.
	 */
	private function next() {
		$this->position++;

		if( $this->position < $this->token_length )
			return true;
		
		return false;	
	}

	/**
	 * Return the token currently being considered.
	 * @return Constant token
	 */
	private function token() {
		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 0 ];
		return $this->tokens[ $this->position ];
	}

	/**
	 * Return the value of the token currently being considered.
	 * @return String Code
	 */
	private function value() {
		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 1 ];
		return $this->tokens[ $this->position ];
	}

	
	/**
	 * Returns parsed classes.
	 */
	public function get_classes() {
		return $this->classes;
	}

	/**
	 * Return parsed functions
	 */
	public function get_functions() {
		return $this->functions;
	}
	 
}

/**
 * Base class to stored parsed data.
 */
class PT_Parse_Data {
}

/**
 * Store parsed classes.
 */
class PT_Parse_Class extends PT_Parse_Data {
}

/**
 * Store parsed functions.
 */
class PT_Parse_Function extends PT_Parse_Data {
}

/**
 * Store parsed methods.
 */
class PT_Parse_Method extends PT_Parse_Function {
}

/**
 * Store parsed variables.
 */
class PT_Parse_Var extends PT_Parse_Data {
}

/**
 * Store parsed Arguments
 */
class PT_Parse_Arg extends PT_Parse_Data {
}

