jQuery(function() {

	let init = function() {

		// Set up all accordion items
		init_accordion_items();

	};

	// ------------------------------------------------------------

	// Set up all accordion items
	let init_accordion_items = function() {

		// Initializes a single accordion item.
		// Can be called multiple times, but only runs once per item.
		let setup_accordion_item = function( $accordion ) {
			if ( $accordion.hasClass('gcm-initialized') ) return;

			// let $handle = $accordion.find('> .gcm-handle').first();
			let $link = $accordion.find('> .gcm-handle > a').first();
			let $content = $accordion.find('> .gcm-content').first();

			// Add icon to handle
			$link.prepend(
				jQuery('<span class="gcm-arrow" aria-hidden="true"></span>')
			);

			// Add aria attributes
			let link_id = get_accordion_element_id( $accordion, $link, name + '-link' );
			let content_id = get_accordion_element_id( $accordion, $content, name + '-content' );

			// Get whether is expanded by default or not
			let is_expanded = $accordion.hasClass('gcm-expanded');

			$link
				.attr( 'aria-expanded', is_expanded )
				.attr( 'aria-controls', content_id );

			$content
				.attr( 'role', 'region' )
				.attr( 'aria-labelledby', link_id );

			// Add a class if the accordion is followed by another accordion
			if ( $accordion.next('.gcm-accordion').length > 0 ) {
				$accordion.addClass('gcm-has-next-accordion');
			}

			// Accordion is ready
			$accordion.addClass('gcm-initialized');
		};

		// Toggle between open and closed state
		let toggle_accordion_item = function( $accordion ) {
			let is_expanded = $accordion.hasClass('gcm-expanded');
			let $link = $accordion.find('> .gcm-handle > a').first();

			// Open the accordion using css classes
			$accordion.toggleClass('gcm-expanded', ! is_expanded );
			$accordion.toggleClass('gcm-collapsed', is_expanded );

			// Update aria attributes
			$link.attr( 'aria-expanded', is_expanded ? 'true' : 'false' );
		};

		// Get the ID for an accordion element ($link or $content)
		// These are used by ARIA attributes.
		let get_accordion_element_id = function( $accordion, $element, suffix ) {
			// Use existing ID if already set
			let id = $element.attr('id');
			if ( id ) return id;

			// Create a new ID based on the link name + suffix
			let $link = $accordion.find('> .gcm-handle > a').first();

			id = $link.text() + '-' + suffix;

			// Sanitize slug (Hello World! -> hello-world)
			// 1. Lower case
			// 2. Combine spaces, hyphens, and underscores into a single hyphen.
			// 3. Remove all characters except a-z, 0-9, and hyphens.
			id = id.toLowerCase().replace(/[\-_\s]+/, '-').replace(/[^a-z0-9\-]+/g, '');

			// Check if ID exists. If so, add a random string to the end
			let limit = 10;
			while ( jQuery('#' + id).length > 0 ) {
				id += '-' + (Math.random() + 1).toString(36).substring(5); // https://stackoverflow.com/a/8084248/470480
				if ( limit -- < 0 ) break;
			}

			// Update the ID of the element
			$element.attr('id', id);

			return id;
		};

		// Set up elements one time
		jQuery('.gcm-accordion').each(function() {
			let $accordion = jQuery(this);

			setup_accordion_item( $accordion );
		});

		// Click to toggle accordions
		jQuery( document.body ).on( 'click', '.gcm-accordion .gcm-handle a', function() {
			let $accordion = jQuery(this).closest('.gcm-accordion');

			setup_accordion_item( $accordion );
			toggle_accordion_item( $accordion );

			return false;
		});

	};

	// ------------------------------------------------------------

	// Run the initialize function after document has loaded
	jQuery(document).ready( init );

});