<?php
/**
 * Plugin URI: https://github.com/saurabhsirdixit/utility-code
 * Description: This file includes basic codes for WP users
 * Version: 0.0.1
 * Author: Saurabh Dixit
 * Author URI: https://saurabhsirdixit.com
 * Text Domain: WP Utility Code
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

// Code to use in wp-config.php to Update WordPress Automatically Without Using FTP 
//Paste the following code to your wp-config.php file, preferably just below every other line of code.

define('FS_METHOD','direct');