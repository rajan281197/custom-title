<?php
/*
Plugin Name: y
Plugin URI:  custom-divi-title
Description: This is the DIVI theme Custom title sample module
Version:     1.0.0
Author:      Rajan Panchal
Author URI:  https://profiles.wordpress.org/rajanpanchal2028/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: customdivititle-custom-title
Domain Path: /languages

y is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

y is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with y. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'customdivititle_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function customdivititle_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/CustomTitle.php';
}
add_action( 'divi_extensions_init', 'customdivititle_initialize_extension' );
endif;
