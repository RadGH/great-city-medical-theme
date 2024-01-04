<?php

/**
 * Check if the current user is a developer. Uses Radley's utility function to check based on IP address.
 *
 * @return bool
 */
function gcm_is_developer() {
	return rs_is_developer();
}

/**
 * Get an array of language codes supported by the website.
 * Array indexes are the language code
 * Icons should be available in assets/flags
 *
 * @param null|string $language_code  If a string, returns a single language based on the key (en, es)
 *
 * @return false|array|array[] {
 *     @type string $english_name  Spanish (Mexico)
 *     @type string $display_name  Español de México
 *     @type string $display_code  ES
 *     @type string $code_short    es
 *     @type string $code_long     es_mx
 *     @type string $icon_png      lang-es_mx.png
 *     @type string $icon_svg      lang-es_mx.svg
 *     @type string $slug          "" or "es"
 * }
 */
function gcm_get_languages( $language_code = null ) {
	
	// 1. Consider adding languages from TranslatePress:
	// get_option( 'trp_settings' )
	// (if doing so, add it to plugin-translatepress.php)
	
	// 2. Consider getting language information from WordPress:
	// require_once( ABSPATH . 'wp-admin/includes/translation-install.php' )
	// wp_get_available_translations()
	
	// Icon URL: get_template_directory_uri() . '/assets/flags/'
	// Icon Path: get_template_directory() . '/assets/flags/'
	
	$languages = array(
		'en_us' => array(
			'code_short' => 'en',
			'code_long' => 'en_us',
			'code_full' => 'en_US',
			'english_name' => 'English',
			'display_name' => 'English',
			'display_code' => 'EN',
			'icon_png' => 'lang-en_us.png',
			'icon_svg' => 'lang-en_us.svg',
			'slug' => '',
		),
		'es_mx' => array(
			'code_short' => 'es',
			'code_long' => 'es_mx',
			'code_full' => 'es_MX',
			'english_name' => 'Spanish (Mexico)',
			'display_name' => 'Español de México',
			'display_code' => 'ES',
			'icon_png' => 'lang-es_mx.png',
			'icon_svg' => 'lang-es_mx.svg',
			'slug' => 'es',
		),
		'ru_ru' => array(
			'code_short' => 'ru', // alternate: rus
			'code_long' => 'ru_ru',
			'code_full' => 'ru_RU',
			'english_name' => 'Russian',
			'display_name' => 'Русский',
			'display_code' => 'RU',
			'icon_png' => 'lang-ru_ru.png',
			'icon_svg' => 'lang-ru_ru.svg',
			'slug' => 'ru',
		),
		// we also have an icon lang-es_es: Spanish (Spain)
	);
	
	// Get TranslatePress language codes
	$trp_codes = gcm_get_trp_language_codes();
	
	// Remove any languages that are not registered in TranslatePress
	foreach( $languages as $code => $l ) {
		if ( ! in_array( $code, $trp_codes ) ) {
			unset( $languages[ $code ] );
		}
	}
	
	if ( $language_code !== null ) {
		return $languages[ $language_code ] ?? false;
	}else{
		return $languages;
	}
}

/**
 * Get translated language codes that are registered in TranslatePress
 *
 * @return string[]  Array of language codes, like "en_us" or "es_mx"
 */
function gcm_get_trp_language_codes() {
	// Get languages configured by TranslatePress
	$settings = get_option( 'trp_settings' );
	
	// Get the language codes
	// $settinsg['url-slugs']['en_US'] = 'en_us';
	// $settinsg['url-slugs']['es_MX'] = 'es';
	$language_codes = $settings ? array_keys( $settings['url-slugs'] ) : array();

	// Lower case
	// $language_codes = array( 'en_us', 'es_mx' );
	$language_codes = array_map( 'strtolower', $language_codes );
	
	return $language_codes;
}

/**
 * Get the page url converted to a specific language. Also prevents TranslatePress from converting that URL again.
 *
 * @param string      $language_code  "en_us" or "es_mx" matching a key from gcm_get_languages()
 * @param null|string $url            Permalink to use. Overrides $post_id if provided.
 */
function gcm_get_language_url( $url, $language_code = 'en_us' ) {
	if ( ! class_exists('TRP_Translate_Press') ) return false;
	
	$trp = TRP_Translate_Press::get_trp_instance();
	$url_converter = $trp->get_component( 'url_converter' );
	
	// TranslatePress requires "en_US" capitalization
	if ( $language_code == 'en_us' ) $language_code = 'en_US';
	else if ( $language_code == 'es_mx' ) $language_code = 'es_MX';
	else if ( $language_code == 'ru_ru' ) $language_code = 'ru_RU';
	else {
		// Translate each letter following an underscore
		$up = function( $matches ) { return '_' . strtoupper( $matches[1] ); };
		$language_code = preg_replace_callback( '/_([a-z]+)$/', $up, $language_code );
	}
	
	// third parameter defaults to "#TRPLINKPROCESSED", meaning the link will not be translated again
	// to disable, you could pass an empty string as third parameter.
	// it's the same effect as using: gcm_tp_prevent_translating_url( url );
	return $url_converter->get_url_for_language( $language_code, $url );
}

/*
 * (OLD VERSION) Get the page url converted to a specific language. Also prevents TranslatePress from converting that URL again.
 *
 * @param string      $language_code  "en_us" or "es_mx" matching a key from gcm_get_languages()
 * @param null|string $url            Permalink to use. Overrides $post_id if provided.
 */
/*
function gcm_get_language_url( $url, $language_code = 'en_us' ) {
	// Convert url to relative, starting with a slash
	$relative_url = wp_make_link_relative( $url );
	if ( ! $relative_url ) return $url;
	
	// Remove other language slugs from the start of the url
	foreach( gcm_get_languages() as $l ) {
		if ( $l['slug'] ) {
			$relative_url = str_replace( '/' . $l['slug'] . '/', '/', $relative_url );
		}
	}
	
	// Add the new language slug to the url
	$lang = gcm_get_languages( $language_code );
	
	if ( $lang && $lang['slug'] ) {
		$relative_url = '/' . $lang['slug'] . $relative_url;
	}
	
	// Convert to full url
	$full_url = site_url( $relative_url );
	
	// Prevent TranslatePress from converting the url to another language
	$full_url = gcm_tp_prevent_translating_url( $full_url );
	
	return $full_url;
}
*/


/**
 * Format a phone number as a string or html link
 *
 * @param string $phone             US/Canada phone number: 5551231234 or 555-123-1234 or (555) 123-1234 or +15551231234 etc.
 * @param bool   $html              Default true. Returns an HTML "tel:" link.
 * @param string $extension_prefix  If an extension is provided, customize the text before the extension.
 * @param string $display_format    The format to display the phone number. Should contain 4x "%d".
 * @param bool   $hide_us_code      Default true, which hides the country code (1) for US phone numbers.
 *
 * @return string
 */
function gcm_format_phone( $phone, $html = true, $extension_prefix = 'ext. ', $display_format = '%1$d (%2$d) %3$d-%4$d', $hide_us_code = true ) {
	// Regex pattern to split parts of a phone number, and optional extension.
	// Supports some country codes, but not all international phone number formats.
	// https://regex101.com/r/4coVfU/1
	$pattern = '/^\+?([0-9]{0,3})?[^0-9]*([0-9]{3,3})[^0-9]*([0-9]{3,3})[^0-9]*([0-9]{4,4})[^0-9]*([^0-9]*(-|e?xt?\.?)[^0-9\-]*([0-9\-]{1,}))?[^0-9]*$/i';
	
	$found = preg_match($pattern, $phone, $matches);
	
	// If the phone number could not be parsed, keep the original format
	if ( ! $found ) return $phone;
	
	// Result from regex match with input: "+1 (541) 123-4567 x999"
	// [1] => 1
	// [2] => 541
	// [3] => 123
	// [4] => 4567
	// [5] => (ignore)
	// [6] => (ignore)
	// [7] => 999
	
	// Output as HTML (ignore the line breaks. tel-ext only if extension was provided):
	// <span class="tel">
	//   <a href="tel:+15411234567" class="tel-link">
	//     541-123-4567
	//   </a>
	//   <span class="tel-ext">
	//     <span class="tel-ext-prefix">ext.</span> 999
	//     <span>ext.</span> 999
	//   </span>
	// </span>
	
	// Output as text:
	// 541-123-4567 ext. 999
	
	$country_code = $matches[1] ?: 1;
	$extension = $matches[7] ?? '';
	
	// Should US country code be hidden?
	if ( $hide_us_code && $country_code == '1' ) {
		$display_format = str_replace( '%1$d', '', $display_format );
		$display_format = trim( $display_format );
	}
	
	$output = '';
	
	// Start html link
	if ( $html ) {
		$tel_href = sprintf('tel:+%d%d%d%d', $country_code, $matches[2], $matches[3], $matches[4]);
		$output .= '<a href="'. esc_attr($tel_href) .'" class="tel-link">';
	}
	
	// The actual phone number to display
	$output .= sprintf($display_format, $country_code, $matches[2], $matches[3], $matches[4]);
	
	// End html link
	if ( $html ) {
		$output .= '</a>';
	}
	
	// Add the extension
	// Links do not (reliably) support an extension, so it appears after the link.
	if ( $extension ) {
		if ( $html ) {
			$output .= '<span class="ext">';
			$output .=   '<span class="ext-prefix">'. esc_html($extension_prefix) .'</span>';
			$output .=   '<span class="ext-value">'. esc_html($extension) .'</span>';
			$output .= '</span>';
		}else{
			$output .= $extension_prefix . $extension;
		}
	}
	
	return $output;
}

/**
 * Check if a block is a classic block, which has not been converted to new blocks yet
 *
 * @param $block
 *
 * @return bool
 */
// DISABLED: Unreliable, some blocks are just empty. /shrug
/*
function gcm_is_block_classic( $block ) {
	// Classic blocks have a lot of HTML in their content, but the structure is basic:
	// array(5) {
	// 	"blockName"    => NULL
	// 	"attrs"        => array(0) {}
	// 	"innerBlocks"  => array(0) {}
	// 	"innerHTML"    => string(6210) "(lots of text)"
	// 	"innerContent" => array(1) { [0] => string(6210) "(lots of text)" }
	// }
	
	// Check if the block has a blockName, and has no innerBlocks
	return ( $block['blockName'] === null && empty($block['innerBlocks']) );
}
*/

/**
 * Get related posts for a post, based on the first category
 *
 * @param int $post_id
 * @param int $limit
 *
 * @return WP_Query
 */
function gcm_get_related_posts_query( $post_id, $limit = 3 ) {
	$args = array(
		'category__in' => wp_get_post_categories( $post_id ),
		'post__not_in' => array( $post_id ),
		'posts_per_page' => $limit,
		'orderby' => 'rand',
		// 'orderby' => 'date',
		// 'order' => 'DESC',
	);
	
	return new WP_Query( $args );
}