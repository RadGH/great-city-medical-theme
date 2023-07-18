jQuery(function() {

	let init = function() {

		// Set up all accordion items
		init_accordion_items();

	};

	// ------------------------------------------------------------

	// Set up all accordion items
	let init_accordion_items = function() {

		// Set up elements one-time
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

	let setup_accordion_item = function( $accordion ) {
		if ( $accordion.hasClass('gcm-initialized') ) return;

		$accordion.addClass('gcm-initialized');
		let $handle = $accordion.find('> .gcm-handle').first();
		let $link = $handle.find('> a').first();
		let $content = $accordion.find('> .gcm-content').first();

		// Add icon to handle
		$link.prepend(
			jQuery('<span class="gcm-arrow" aria-hidden="true"></span>')
		);

		// Add aria attributes?
	};

	let toggle_accordion_item = function( $accordion ) {
		if ( $accordion.hasClass('gcm-expanded') ) {
			$accordion.toggleClass('gcm-expanded', false);
			$accordion.toggleClass('gcm-collapsed', true);
		}else{
			$accordion.toggleClass('gcm-expanded', true);
			$accordion.toggleClass('gcm-collapsed', false);
		}
	};

	/*
	// Accordion item object to be created for each <div class="gcm-accordion">
	let GCM_Accordion_Item = function( $accordion ) {
		let $handle, $content, $link;

		// Handle and content are required and must be direct children of the accordion
		$handle = $accordion.find('> .gcm-handle').first();
		$content = $accordion.find('> .gcm-content').first();

		// If the handle is a link or button, wrap it in a div instead
		if ( $handle.is('a, button') ) {
			$link = $handle;
			$handle = jQuery('<div>').addClass('gcm-handle');
			$link.after( $handle );
			$handle.append( $link );
			$link.removeAttr('gcm-handle');
		}else{
			$link = $handle.find( 'a, button' ).first();
		}

		// Required elements
		if ( $accordion.length !== 1 ) return console.log('Accordion item is invalid', $accordion);
		if ( $handle.length !== 1 ) return console.log('Accordion has no handle element: ', $accordion);
		if ( $content.length !== 1 ) return console.log('Accordion has no content element: ', $accordion);
		if ( $link.length !== 1 ) return console.log('Accordion has no link element: ', $accordion);

		let a = this;

		// First parameter should be a jQuery element of <div class="gcm-accordion">
		a.initialize_item = function() {
			if ( $accordion.hasClass('gcm-initialized') ) return;

			// Collapse by default unless gcm-expanded is present
			if ( ! $accordion.hasClass('gcm-expanded') ) {
				$accordion.addClass('gcm-collapsed');
			}

			// Add an arrow element to indicate if the item is expanded or collapsed
			$link.prepend(
				jQuery('<span class="gcm-arrow" aria-hidden="true"></span>')
			);

			// Update aria attributes for the first time
			a.update_aria_atts();

			// Click the link to toggle the class
			$link.on('click', function(e) {
				a.on_click_toggle();
				return false;
			});

			// Remember this accordion item is already set up
			$accordion.addClass('gcm-initialized');
		};

		// Check if an accordion is expanded
		a.is_expanded = function() {
			return $accordion.hasClass('gcm-expanded');
		};

		// Get the ID of the element. ID will be generated if it is blank.
		a.get_or_add_element_id = function( $element, name ) {
			// Get existing ID
			let id = $element.attr('id');
			if ( id ) return id;

			// Create a new ID based on the provided name
			id = (typeof name === 'undefined' || !name) ? 'accordion-element' : name;

			// Convert to slug (Hello World! -> hello-world)
			// 1. Lower case
			// 2. Combine spaces, hyphens, and underscores into a single hyphen.
			// 3. Remove all characters except a-z, 0-9, and hyphens.
			id = id.toLowerCase().replace(/[\-_\s]+/, '-').replace(/[^a-z0-9\-]+/g, '');

			// Check if ID exists. If so, add a random string to the end
			if ( jQuery('#' + id).length > 0 ) {
				id += '-' + (Math.random() + 1).toString(36).substring(5); // https://stackoverflow.com/a/8084248/470480
			}

			// Update the ID of the element
			$element.attr('id', id);

			return id;
		};

		a.on_click_toggle = function() {
			// If expanded, make it collapsed
			let make_expanded = ! a.is_expanded();

			// Toggle the classes
			$accordion
				.toggleClass('gcm-expanded', make_expanded)
				.toggleClass('gcm-collapsed', !make_expanded);

			// Update aria attributes
			a.update_aria_atts();
		};

		a.update_aria_atts = function() {
			// Get ID of the content element (auto-generated if blank)
			let name = $link.text();
			let link_id = a.get_or_add_element_id( $link, name + '-link' );
			let content_id = a.get_or_add_element_id( $content, name + '-content' );

			let is_expanded = a.is_expanded();

			// Update the link attributes
			$link
				.attr( 'aria-expanded', is_expanded ? 'true' : 'false' )
				.attr( 'aria-controls', content_id );

			// Update the content attributes
			$content
				.attr( 'role', 'region' )
				.attr( 'aria-labelledby', link_id );
		};

		a.initialize_item();

	}; // end of: GCM_Accordion_Item()
	*/

	// ------------------------------------------------------------

	jQuery(document).ready( init );

});