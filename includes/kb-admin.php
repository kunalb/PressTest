<?php

/**
 * Generic Class that can be extended for creating admin screens for plugins.	
 * @package KB_Includes
 */

 class KB_Admin {

	/**
	 * The constructor, conditionally initializes the requirements for the plugin.
	 *
	 * Instead of having to check whether the correct page has been loaded externally,
	 * this function only initializes required scripts and styles on the appropriate
	 * plugin pages.
	 *
	 * @param Array[string]string args The Admin Page structure for the menu; accepts an Array with the options<pre>
	 *                 			[ 'parent'     => Parent Menu (default admin.php)
	 *               		  	, 'slug'       => Slug for link (required)
	 *    		              		, 'page-title' => Page title (required)
	 *             		     		, 'menu-title' => Menu title (required)
	 *                 		 	, 'capability' => Who can access this page (default 'read')
	 *       		           	, 'icon-url'   => Icon, only for top level pages (default none)
	 *		    			, 'position'   => Position in the Menu, only for top level pages (default bottom of page)
	 *                                      ]</pre>
	 */
	public function __construct( $args ) {

		if( 	!isset( $args['slug'] ) 
		  ||	!isset( $args['page-title'] )
		  ||	!isset( $args['menu-title'] ) )
			trigger_error( "A KB_Admin Class must be initialized with a slug, page title and menu title." );

	}

	/** Extend this function to actually display the contents of the page. */
	public function render() {
		global $current_screen, $hook_suffix;
		kb_debug( $current_screen );
		kb_debug( $hook_suffix );
	}

 }
