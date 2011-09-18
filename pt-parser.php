<?php 

/**
 * Parses PHP code for classes and function definitions.
 *
 * @package PressTest
 * @version 0.2
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
	 * Constructor. Starts parsing.
	 * @param String $file File to be parsed
	 */
	public function __construct( $file ) {
		$this->data = file_get_contents( $file );
		$this->file = $file;
		$this->position = 0;
		$this->tokens = token_get_all( $rawdata );
		$this->token_length = count( $this->tokens );
	}

	/**
	 * Parse and split data.
	 */
	private function parse() {
	}

	/**
	 * Moves parser forward till closing brace.
	 */
	private function parse_till_brace() {
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
	 * Returns parsed classes.
	 */
	public function classes() {
	}

	/**
	 * Return parsed functions
	 */
	public function functions() {
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

