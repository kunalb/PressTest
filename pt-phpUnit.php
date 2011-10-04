<?php

/**
 * Loads and run the phpUnit tests for the 
 * plugin specified in the GET parameters.
 *
 * Does not include any WordPress files --
 * any tests must include them as required.
 *
 * @package PressTest
 * @author Kunal Bhalla
 * @version 0.1
 */

/**
 * Define constants that can be used in the tests.
 */
require 'mocked/constants.php'; 

/**
 * Load the mime!
 */
require 'pt-mime.php'; 

/**
 * Set the include path for the autoloader.
 */
set_include_path('phpunit/phpunit' . PATH_SEPARATOR . get_include_path() );

/**
 * Increase the execution time.
 */
set_time_limit( 600 );

/**
 * Hide deprecated notices
 */
if( defined( 'E_DEPRECATED' ) ) 
	error_reporting( E_ALL ^ E_DEPRECATED );

/**
 * Load the autoloader: TODO Change so that path information is not a problem.
 */
if( !class_exists( 'PHPUnit_TextUI_Command' ) )
	require_once 'phpunit/phpunit/PHPUnit/Autoload.php';

PHP_CodeCoverage_Filter::getInstance()->addFileToBlacklist(__FILE__, 'PHPUNIT');

define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
$_SERVER[ 'argv' ] = Array( 'phpunit/phpunit/phpUnit.php', rawurldecode( $_GET[ 'pt-tests' ] ) ); 

echo "<pre>";
PHPUnit_TextUI_Command::main(false);
echo "</pre>";
