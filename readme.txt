=== BP xProfile Location ===
Contributors: shanebp
Donate link: https://www.philopress.com/donate/
Tags: buddypress, members, profile, xprofile, location, address, geocode, map
Author: PhiloPress
Author URI: https://philopress.com/
Plugin URI: https://www.philopress.com/products/bp-xprofile-location/
Requires at least: 4.0
Tested up to: 5.1
Stable tag: 2.0
License: GPLv2 or later

== Description ==

This is a BuddyPress plugin that creates an xProfile Location field type that will use the Google Places API to populate and validate the address fields.

The result will be *uniform* and *searchable* addresses with a *single* input field.

You can create multiple Location fields via *wp-admin > Users > Profile Fields > Add New Field*

The xprofile field for each member will be populated as a searchable string.

A latitude / longitude 'geocode' will be saved as a separate field, if that option was selected when the field was created.

You can then use the geocode in your preferred Member Map solution.

Or you may be interested in this BuddyPress **Member Map** solution: [BP Maps for Members](https://www.philopress.com/products/bp-maps-for-members "BP Maps for Members")

For BuddyPress **Group Maps**, please see: [BP Maps for Groups](https://www.philopress.com/products/bp-maps-for-groups "BP Maps for Groups")


For more information about this plugin, please visit [BP xProfile Location](https://www.philopress.com/products/bp-xprofile-location/ "BP xProfile Location")


== Installation ==

1. If you have not entered a Google Maps API Key for one of your other PhiloPress plugins - see the FAQ

2. Upload the zip on the Plugins > Add screen in wp-admin

3. Activate the plugin through the 'Plugins' menu in WordPress

4. Go to wp-admin > Settings > BuddyPress > Options. Under 'Profile Settings', find 'Google Maps API key', enter your key and Save

5. Go to wp-admin > Users > Profile Fields > Add New Field and Create a profile field of Type = Location.




== Frequently Asked Questions ==

= Do I need a Google Maps API Key? =
Yes. If you need help, read this tutorial: [Google Maps API Key](https://www.philopress.com/google-maps-api-key/ "Google Maps API Key")

= I have a Google Maps API Key. Where do I put it? =
Go to wp-admin > Settings > BuddyPress > Options.
Under 'Profile Settings', find 'Google Maps API key', enter your key and Save

= Other questions? =
* Multisite support - Yes
* Works with [BP Profile Search](https://wordpress.org/plugins/bp-profile-search/ "BP Profile Search plugin")
* Maps are not included. For member maps, please see: [BP Maps for Members](https://www.philopress.com/products/bp-maps-for-members "BP Maps for Members"). For group maps, please see: [BP Maps for Groups](https://www.philopress.com/products/bp-maps-for-groups "BP Maps for Groups")




== Screenshots ==
1. The Edit screen on a member profile with Address Auto-Complete
2. Creating a Profile Field of Type > Location
3. GeoCode option when creating a Profile Field


== Changelog ==

= 2.0 =
* Tested with 5.1.1
* Add support for distance searches via the BP Profile Search plugin IF you have the premium BP Maps for Members plugin from PhiloPress

= 1.8 =
* Tested with 5.0.2
* Improve multisite support

= 1.7 =
* Add settings field for the 'Google Maps API key to BuddyPress settings

= 1.6 =
* Add 'Description' field output in class-pp-field-type-location.php

= 1.5 =
* Prevent saving of field data and geocode if the value is an empty serialized array, a:0:{}

= 1.4 =
* Changed the method for supporting the BP Profile Search plugin.

= 1.3 =
* Added check for enabled BuddyPress Extended Profiles component
* Tested with WP 4.7 and BP 2.7.2

= 1.2 =
* Added requirement for Google Maps API Key.

= 1.1 =
* Fix autolink issue

= 1.0 =
* Initial release.



== Upgrade Notice ==

= 2.0 =
* Tested with 5.1.1
* Add support for distance searches via the BP Profile Search plugin IF you have the premium BP Maps for Members plugin from PhiloPress

= 1.8 =
* Tested with 5.0.2
* Improve multisite support

= 1.7 =
* Add settings field for the 'Google Maps API key' to BuddyPress settings. Manually placing the key in the code is no longer required. But if you have already done so, it will be backward compatible.

= 1.6 =
* Add 'Description' field output when the Profile field is shown

= 1.5 =
* Prevent saving of field data and geocode if the value is an empty serialized array, a:0:{}

= 1.4 =
* Changed the method for supporting the BP Profile Search plugin.  You must have at least version 4.7.8 of the BP Profile Search plugin in order to be able to search on any profile fields that you add using the BP xProfile Location plugin.

= 1.3 =
* Added check for enabled BuddyPress Extended Profiles component
* Tested with WP 4.7 and BP 2.7.2

= 1.2 =
* Added requirement for Google Maps API Key. If you were using this plugin prior to June 22, 2016, you don't need this update. If you decide to update anyway, you will need a Key - please see the FAQ for more info

= 1.1 =
* Fix autolink issue

= 1.0 =


