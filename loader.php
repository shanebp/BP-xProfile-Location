<?php
/*
 * Plugin Name: BP xProfile Location
 * Description: Adds an xProfile Location field type that uses the Google Places API to complete and validate addresses
 * Version: 1.1
 * Author: shanebp
 * Author URI: http://philopress.com/
 * Text Domain: bp-profile-location
 * Domain Path: /languages/
 * License: GPLv2 or later
 */

if ( !defined( 'ABSPATH' ) ) exit;


function pp_loc_bp_check() {

	if ( !class_exists('BuddyPress') )
		add_action( 'admin_notices', 'pp_loc_install_buddypress_notice' );

}
add_action('plugins_loaded', 'pp_loc_bp_check', 999);

function pp_loc_install_buddypress_notice() {
	echo '<div id="message" class="error fade"><p style="line-height: 150%">';
	_e('BP xProfile Location requires the BuddyPress plugin. Please install BuddyPress or deactivate BP xProfile Location.', 'bp-profile-location');
	echo '</p></div>';
}

function pp_loc_init() {

	define( 'PP_LOC_DIR', dirname( __FILE__ ) );

	load_plugin_textdomain( 'bp-profile-location', false, PP_LOC_DIR . '/languages' );

	require( PP_LOC_DIR . '/inc/pp-field-type-location.php' );

}
add_action( 'bp_include', 'pp_loc_init' );

