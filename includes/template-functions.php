<?php

/**
 * Get locations from the theme's general settings page.
 *
 * @return array[] {
 *     @type string $title
 *     @type string $address
 *     @type string $phone
 *
 *     @type string[] $hours {
 *         @type string $sunday
 *         @type string $monday
 *         @type string $tuesday
 *         @type string $wednesday
 *         @type string $thursday
 *         @type string $friday
 *         @type string $saturday
 *     }
 * }
 */
function gcm_get_locations() {
	$locations = get_field( 'locations', 'gcm_settings' );
	
	// Format each location
	foreach( $locations as $i => &$location ) {
		$location['title']   = $location['title'] ?? '';
		$location['address'] = $location['address'] ?? '';
		$location['phone']   = $location['phone'] ?? '';
		
		$location['hours'] = (array) ($location['hours'] ?? array());
		$location['hours']['sunday']    = $location['hours']['sunday'] ?? '';
		$location['hours']['monday']    = $location['hours']['monday'] ?? '';
		$location['hours']['tuesday']   = $location['hours']['tuesday'] ?? '';
		$location['hours']['wednesday'] = $location['hours']['wednesday'] ?? '';
		$location['hours']['thursday']  = $location['hours']['thursday'] ?? '';
		$location['hours']['friday']    = $location['hours']['friday'] ?? '';
		$location['hours']['saturday']  = $location['hours']['saturday'] ?? '';
		
		// Translation support
		$location['title'] = __( $location['title'] );
		
		// Title is required
		if ( ! $location['title'] ) {
			unset($locations[$i]);
		}
	}
	
	return $locations;
}