<?php
/*
	Plugin Name: PressTest
	Plugin URI: http://github.com/kunalb/presstest
	Description: Tip 62: "Test early. Test often. Test Automatically."
	Version: 0.1-bleeding
	Author: Kunal Bhalla. 
	Author URI: http://kunal-b.in
	License: GPL2
	Text Domain: presstest

	Copyright 2010-2011 Kunal Bhalla  (email : bhalla.kunal@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Loader. Set constants and load the main controller.
 *
 * @author Kunal Bhalla
 * @version 0.1
 * @package PressTest
 */

/**#@+
 * Generic includes.
 */
/** The singleton abstract class */
require "includes/kb-singleton.php";
/** The Admin page base class */
require "includes/kb-admin.php";
/**#@-*/

/**#@+
 * PressTest includes.
 */
/** Constant definitions */ 
require "pt-constants.php";
/** The core plugin class */
require "pt-core.php";
/** The admin page class */
require "pt-admin.php";
/**#@-*/

/** Start your engines! */
PT_Core::singleton();
