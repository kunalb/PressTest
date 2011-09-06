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

require_once 'PHPUnit/Autoload.php';

define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
$_SERVER[ 'argv' ] = Array( 'phpUnit.php', rawurldecode( $_GET[ 'pt-tests' ] ) ); 

PHPUnit_TextUI_Command::main();


