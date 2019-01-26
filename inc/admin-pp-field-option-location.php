<?php
// Exit if accessed directly

if ( ! defined( 'ABSPATH' ) ) exit;

// add a field for a Google Maps API key to wp-admin > Settings > BuddyPress > Options > Profile Settings

function pp_loc_profile_lic_field() {
 
    add_settings_field(
        'pp_gapikey',
        __( 'Google Maps API key', 'bp-profile-location' ),
		'pp_loc_profile_lic_field_callback',
        'buddypress',
        'bp_xprofile'
    );
 

    register_setting(
        'buddypress',
        'pp_gapikey',
        'pp_loc_profile_lic_field_validate'
    );
 
}
 
add_action( 'bp_register_admin_settings', 'pp_loc_profile_lic_field' );
 
 
// display function for the field
function pp_loc_profile_lic_field_callback() {

	$option_value = bp_get_option( 'pp_gapikey' );  
	
    ?>
	
	<input type="text" size="50" id="pp_gapikey" name="pp_gapikey" placeholder="Paste Your Google Maps API Key Here" value="<?php echo $option_value; ?>" /> 
	<p class="description"><?php _e("A Key is required. If you do not have one, follow these instructions:", "bp-profile-location");?>
	<br><a href="https://www.philopress.com/google-maps-api-key/" target="_blank">Get a Google Maps API Key</a></p>	
	

    <?php
}
 
// placeholder validation function for the field
function pp_loc_profile_lic_field_validate( $option ) {
	
	// test for length ? 

    return $option;
}

