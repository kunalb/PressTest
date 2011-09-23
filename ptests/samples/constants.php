<?php

/**
 * Define universal constants. 
 * @package PressTest
 */

/** Plugin Folder */
define( 'PT_FOLDER', 'presstest' );

/** Plugin Directory */
define( 'PT_DIR', WP_PLUGIN_DIR . '/' . PT_FOLDER  );

/** Hand written basename to avoid soft linking issues */
define( 'PT_FILE', PT_FOLDER . '/PressTest.php' );

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

/** The directory for mocked files. */
define( 'PT_MOCK_DIR', PT_DIR . '/mocked' );

/** The directory for mocked theme files. */
define( 'PT_MOCK_THEME_DIR', PT_MOCK_DIR . '/themes' );

/** The directory for mocked plugin files. */
define( 'PT_MOCK_PLUGIN_DIR', PT_MOCK_DIR . '/plugins' );

/** The option indicating that the presstest folder should be writeable. */
define( 'PT_NEEDS_PERMISSION', 'PT_Needs_Permission' );

/** Admin path */
define( 'PT_ADMIN_DIR', ABSPATH . 'wp-admin' );

/** Admin includes path */
define( 'PT_ADMIN_INCLUDES_DIR', PT_ADMIN_DIR . '/includes' );
