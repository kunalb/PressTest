<?php

/**
 * Define universal constants. 
 * @package PressTest
 */

/** Plugin Directory */
define( 'PT_DIR', WP_PLUGIN_DIR . '/PressTest' );

/** phpUnit Directory */
define( 'PT_PHPUNIT_DIR', PT_DIR . '/phpunit/phpunit' );

/** Plugin URL */
define( 'PT_URL', plugins_url( 'presstest' ) );

/** qUnit Directory */
define( 'PT_QUNIT_URL', PT_URL . '/qunit/qunit' );

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
define( 'PT_ADMIN_URL', get_admin_url() . 'admin.php?page=' .  PT_SLUG );

/** PressTest Screen modified */
define( 'PT_PLUGINS_SCREEN', 'plugins');

/** PressTest Column identifier */
define( 'PT_COL', 'pt_tests' );
