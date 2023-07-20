<?php

/**
 * Get the default language of the website from TranslatePress settings. Defaults to en_US
 *
 * @return string
 */
function gcm_tp_get_default_language() {
	return get_option( 'trp_settings' )['default-language'] ?? 'en_US';
}

/**
 * Get the current language used to display the page.
 *
 * @return string
 */
function gcm_tp_get_current_language() {
	global $TRP_LANGUAGE;
	return $TRP_LANGUAGE ?? 'en_US';
}

/*
 * (NO LONGER USED) Prevents TranslatePress from converting a URL by adding a code to the end. The code is removed after being checked.
 *
 * @param $url
 *
 * @return mixed|string
 */
/*
function gcm_tp_prevent_translating_url( $url ) {
	
	// Do not modify URLs when showing the default language
	if ( gcm_tp_get_default_language() == gcm_tp_get_current_language() ) {
		return $url;
	}
	
	// Add a code to the url that tells TranslatePress to ignore the url
	// TranslatePress removes this code automatically (unless showing the default language, hence the previous code)
	if ( class_exists('TRP_Translate_Press') ) {
		$url .= '#TRPLINKPROCESSED';
	}
	
	return $url;
}
*/