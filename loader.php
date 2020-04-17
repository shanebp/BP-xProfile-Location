<?php
/*
 * Plugin Name: BP xProfile Location
 * Description: Adds an xProfile Location field type that uses the Google Places API to complete and validate addresses
 * Version: 3.0
 * Author: PhiloPress
 * Author URI: https://www.philopress.com/
 * Text Domain: bp-profile-location
 * Domain Path: /languages/
 * License: GPLv2 or later
 */

if ( !defined( 'ABSPATH' ) ) exit;


function pp_loc_bp_check() {

	if ( ! class_exists('BuddyPress') ) {

		add_action( 'admin_notices', 'pp_loc_install_buddypress_buddyboss_notice' );

	} else {

		$bp = buddypress();

		if ( $bp->buddyboss ) {

			add_filter( 'bp_ps_add_fields', 'pp_loc_boss_ps_fields', 999 );

		}
	}

}
add_action('plugins_loaded', 'pp_loc_bp_check', 999);

function pp_loc_install_buddypress_buddyboss_notice() {
	echo '<div id="message" class="error fade"><p style="line-height: 150%">';
	_e('BP xProfile Location requires the BuddyPress plugin or the BuddyBoss Platform plugin. Please install either of those plugins or deactivate the BP xProfile Location plugin.', 'bp-profile-location');
	echo '</p></div>';
}

function pp_loc_init() {

	if ( bp_is_active( 'xprofile' ) ) {

		define( 'PP_LOC_DIR', dirname( __FILE__ ) );

		load_plugin_textdomain( 'bp-profile-location', false, PP_LOC_DIR . '/languages' );

		require( PP_LOC_DIR . '/inc/pp-field-type-location.php' );

		if ( is_admin() )  {

			$bp = buddypress();
			if ( $bp->buddyboss ) {
				require( PP_LOC_DIR . '/inc/admin-pp-field-option-location-boss.php' );
			} else {
				require( PP_LOC_DIR . '/inc/admin-pp-field-option-location.php' );
			}
		}
	} else {
		echo '<div id="message" class="error fade"><p style="line-height: 150%">';
		 _e('BP xProfile Location requires the BuddyPress Extended Profiles component. Please enable Extended Profiles or deactivate BP xProfile Location.');
		echo '</p></div>';
	}

}
add_action( 'bp_include', 'pp_loc_init' );



function pp_loc_boss_ps_fields( $fields ) {

	foreach( $fields as $key => $field ) {

		if ( isset( $field->type )  && $field->type == 'location' ) {

			$field->format = 'location';

		}

	}

	return $fields;
}



if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}
