<?php

/**
 * Simple table generator.
 * @package KB_Includes
 */

class KB_Table {
	/**
	 * The data to be displayed.
	 *
	 * Accepts data of the form of a 2D Array.
	 */
	private $data;

	/** Column Headers */
	private $columns;

	/** Pagination settings */
	private $pagination;

	/** Output/HTML */
	private $output;

	/**
	 * Constructor
	 *
	 * @param Array $args An associative array of the form
	 *                    Array( 'data' => Array         | Required
	 *                         , 'columns' => Array      | Required
	 *                         , 'classes' => Bool       | Optional, default true
	 *                         , 'pagination' => Array() | Optional, for paginated output, default null
	 *                         );
	 */
	public function __construct( $args ) {
		$args = wp_parse_args( $args, Array(
				'data' => Array(),
				'columns' => Array(),
				'classes' => true,
				'pagination' => Array()
		) );		

		$this->data = $args['data'];
		$this->columns = $args['columns'];
	}

	/** Create the HTMLized structure of the table */
	public function create() {
		$this->output  = "<table class = 'widefat'>";

		$columns = "";
		foreach( $this->columns as $column )
			$columns .= "<th scope = 'col' class = 'manage-column {$column['class']}'>{$column['content']}</th>";

		$this->output .= "<thead><tr>$columns</tr></thead>";
		$this->output .= "<tfoot><tr>$columns</tr></tfoot>";

	}

	/** Return the output, lazily evaluating if required. */
	public function get() {
		if( empty( $this->output ) ) $this->create();
		return $this->output;
	}

	/** Echo the output. */
	public function render() {
		echo $this->get();
	}
}
