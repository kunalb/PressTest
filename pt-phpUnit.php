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
 * Set the include path for the autoloader.
 */
set_include_path('phpunit/phpunit' . PATH_SEPARATOR . get_include_path() );

if( !class_exists( 'PHPUnit_TextUI_Command' ) )
	require_once 'phpunit/phpunit/PHPUnit/Autoload.php';

PHP_CodeCoverage_Filter::getInstance()->addFileToBlacklist(__FILE__, 'PHPUNIT');

define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
$_SERVER[ 'argv' ] = Array( 'phpunit/phpunit/phpUnit.php', rawurldecode( $_GET[ 'pt-tests' ] ) ); 

ob_start();
PHPUnit_TextUI_Command::main(false);
$data = ob_get_clean();

echo preg_replace( '/\n/', '<br />', $data );
