<?php

/**
 * Define universal constants. 
 * @package PressTest
 */

/** Plugin Directory */
define( 'PT_DIR', WP_PLUGIN_DIR . '/PressTest' );

/** Plugin URL */
define( 'PT_URL', plugins_url( 'PressTest' ) );

/** Images folder */
define( 'PT_IMAGES_URL', PT_URL . '/resources/images' );

/** Scripts folder */
define( 'PT_SCRIPTS_URL', PT_URL . '/resources/scripts' );

/** Styles folder */
define( 'PT_STYLES_URL', PT_URL . '/resources/styles' );

/** Plugin Homepage */
define( 'PT_HOME', 'http://github.com/kunalb/PressTest/' );

/** PressTest Admin Slug */
define( 'PT_SLUG', 'presstest' );

/** PressTest Admin Page URL */
define( 'PT_ADMIN_URL', get_admin_url() .  PT_SLUG );

/** PressTest Screen modified */
define( 'PT_PLUGINS_SCREEN', 'plugins');

/** PressTest Column identifier */
define( 'PT_COL', 'pt_tests' );
