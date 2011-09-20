<?php

/**
 * Base parser. Maintains state and utility functions.
 */
abstract class PT_Parse {
	private static $tokens;
	private static $position;
	private static $tokens_length;
	private static $mods;
	private static $mod_distance;
	protected static $mod_list = Array( 
		T_DOC_COMMENT,
		T_FINAL,
		T_PUBLIC,
		T_PRIVATE,
		T_PROTECTED,
		T_VAR,
		T_STATIC
	);	

	private function __construct() {
	}

	protected function stop() {
		$this->postition = $this->tokens_length();
	}

	protected function end() {
		if( $this->position < $this->tokens_length ) 
			return false;
		return true;	
	}

	protected function reset() {
		$this->position = 0;
	}

	protected function set( $tokens ) {
		$this->postition = 0;
		$this->tokens = $tokens;
		$this->tokens_length = count( $tokens );
		$this->mods = Array();
	}

	private function modifiers() {
		if( in_array( $this->token(), $this->mod_list ) ) {
			$this->mods[ $this->token() ] = $this->value();
			$this->mod_distance = 0;
		} else if( $this->token() != T_WHITESPACE ) {
			$this->mod_distance++;
			if( $this->mod_distance > 0 )
				$this->reset_modifiers();
		}
	}

	private function reset_modifiers() {
		$this->mods = Array();
	}

	protected function get_modifier( $token ) {
		return $this->mods[ $this->token() ];
	}

	protected function each() {
		$this->modifiers();
	}

	protected function next() {
		$this->position++;
		if( !$this->end() )
			$this->each();
		return !$this->end();
	}

	protected function token() {
		if( $this->end() ) return false;

		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 0 ];
		else return $this->tokens[ $this->position ];
	}	

	protected function value() {
		if( $this->end() ) return false;

		if( is_array( $this->tokens[ $this->position ] ) )
			return $this->tokens[ $this->position ][ 1 ];
		else return $this->tokens[ $this->position ];
	}	

	protected function line() {
		if( $this->end() ) return false;

		if( is_array( $this->tokens[ $this->position ] ) && isset( $this->tokens[ $this->position ][ 2 ] ) ) 
			return $this->tokens[ $this->position ][ 2 ];
	
		return false;		
	}	

	protected function skip_till( $token ) {
		while( $this->token() != $token && !$this->end() )
			$this->next();
	}

	protected function skip_block() {
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
		$this->set( file_get_contents( $file ) );
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

//new PT_Parse_File( 'tests/class-wp-filesystem-direct.php' );
