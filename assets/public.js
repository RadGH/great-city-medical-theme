(function() {

	const initialize = function() {

		setup_mobile_menu_button();

		setup_click_menus();

		setup_image_sliders();

		prevent_language_preview_click();

		setup_cf7_radio_button_rows();

	};

	// ------------------------------------------------------------
	// Shared functions

	// Return true if browser is desktop size, by using the same media query as css.
	const is_browser_desktop = function() {
		return matchMedia('(min-width: 1200.1px)').matches;
	};

	// Return true if the browser uses a touch screen, by checking pointer accuracy.
	// (coarse = touchscreen, fine = mouse)
	const is_browser_touchscreen = function() {
		return matchMedia('(pointer:coarse)').matches;
	}

	// ------------------------------------------------------------
	// Core functions

	const setup_mobile_menu_button = function() {
		// Click the three lines on mobile to open the menu
		const menu_button = document.querySelector('#menu-button');

		const toggle_menu = function(e) {
			document.body.classList.toggle( 'menu-open' );

			e.preventDefault();
			e.stopPropagation();
		};

		menu_button.addEventListener('click', toggle_menu);
	};

	const setup_click_menus = function() {

		let monitor_unknown_clicks = false;

		// Check if you should use click menus (coarse [touch]) or hover menus (fine [mouse])
		const use_click_menus = function() {
			let use_click_menus = is_browser_touchscreen();

			document.body.classList.toggle( 'menu-use-clicks', use_click_menus );

			return use_click_menus;
		};

		// When a menu is opened, check if you clicked out of the menu. if so, close the menu instead
		const clicked_unknown_item = function(e) {
			if ( ! monitor_unknown_clicks ) return;

			// Only run once, re-hooked when each menu is opened
			monitor_unknown_clicks = false;

			// Check for any open menus
			let open_menus = document.querySelectorAll('.sub-menu-open');
			if ( open_menus.length < 1 ) return;

			// Close menus
			open_menus.forEach(function(m) {
				m.classList.remove('sub-menu-open');
			});

			// Because a menu was closed instead of clicking on a link, block the click
			e.preventDefault();
			e.stopPropagation();
		};

		// Whenever a menu item containing a sub menu is clicked, open the sub menu first
		document.addEventListener('click', function(e) {
			// Only enable click menus for touch screens (because mouse can hover, keyboard can tab)
			if ( ! use_click_menus() ) return;

			let link = e.target;
			let menu = e.target.parentNode;

			// Must click on a link
			if ( link.nodeName !== 'A' ) {
				return clicked_unknown_item(e);
			}

			// Clicking the link again should close the menu
			if ( menu.matches('.sub-menu-open') ) {
				menu.classList.remove('sub-menu-open');
				monitor_unknown_clicks = false;
				e.preventDefault();
				e.stopPropagation();
				return;
			}

			// Allow the click if it is within an open sub menu
			if ( menu.closest('.sub-menu-open') ) {
				return;
			}

			// The link must be in a menu item containing a sub menu
			if ( ! menu.classList.contains('menu-item-has-children') ) {
				return clicked_unknown_item(e);
			}

			// Close other sub menus that are still open (desktop only)
			if ( is_browser_desktop() ) {
				document.querySelectorAll('.sub-menu-open').forEach(function(m) {
					m.classList.remove('sub-menu-open');
				});
			}

			// Open the target sub menu
			menu.classList.add('sub-menu-open');

			// Monitor clicks outside the menu in order to automatically close the menu
			monitor_unknown_clicks = true;

			// Prevent the link from opening
			e.preventDefault();
			e.stopPropagation();
		});
	};

	const setup_image_sliders = function() {
		const create_slider = function( slider ) {

			// Only set up the slider once
			if ( slider.classList.contains('init') ) {
				return;
			}else{
				slider.classList.add('init');
			}

			slider.classList.add('slider-flickity');

			// Require Flickity to be loaded
			if ( typeof Flickity === 'undefined' ) {
				console.log('[GCM Slider] Flickity is not defined, slider will not be functional.');
				slider.classList.add('no-flickity');
				return;
			}

			// Default slider options
			let options = {
				cellSelector: '.slider-item',
				imagesLoaded: true,
				cellAlign: 'center',
				contain: true,
				pageDots: true,
				prevNextButtons: true,
				wrapAround: true,
				adaptiveHeight: true,
				groupCells: false,
				accessibility: false,
				selectedAttraction: 0.01,

				// see: /assets/third-party/flickity/arrow.svg
				arrowShape: "M73 .5a4.6 4.6 0 0 0-3.2 1.2l-46 45a4.6 4.6 0 0 0 0 6.6l46 45a4.6 4.6 0 0 0 6.5-.1 4.6 4.6 0 0 0-.1-6.5L33.5 50 76.2 8.3a4.6 4.6 0 0 0 0-6.5A4.6 4.6 0 0 0 73.2.5z",
			};

			// Initialize the slider
			let f = new Flickity( slider, options );

			// Add a class to the slider when it is ready
			f.on( 'ready', function() {
				slider.classList.add('ready');
			});
		};

		// Prepare all sliders
		document.querySelectorAll('.gcm-slider').forEach( create_slider );
	};

	const prevent_language_preview_click = function() {
		// When clicking on a preview language, do not change the url
		document.querySelectorAll('.language-list .language.preview').forEach(function(el) {
			el.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
			});
		});
	};

	const setup_cf7_radio_button_rows = function() {
		let radio_rows = document.querySelectorAll('.cf7_radio_button_row');
		if ( radio_rows.length < 1 ) return;

		// Restructure the radio button list to match the field group structure
		// OLD:
		// span.wpcf7-form-control.wpcf7-radio.cf7_radio_button_row
		// > span.wpcf7-list-item
		//   > label
		//     > input[type="radio"]
		//     > span

		// NEW:
		// div.radio-button-row
		// > label
		//   > input[type="radio"]
		//   > span

		radio_rows.forEach(function(row) {

			// Modify classes of the row
			row.classList.add('radio-button-row');
			row.classList.remove('wpcf7-form-control');
			// row.classList.remove('wpcf7-radio'); // needs to stay for validation

			// Select each radio item
			row.querySelectorAll('span.wpcf7-list-item').forEach(function(item) {
				let label = item.querySelector('label');

				// Move the label to the outside of the span
				item.parentNode.insertBefore(label, item);

				// Remove the "wpcf7-list-item" class from the label
				label.classList.remove('wpcf7-list-item');

				// Remove the "wpcf7-list-item-label" class from the label
				label.classList.remove('wpcf7-list-item-label');

				// Remove the wrapping span that is now empty
				item.remove();

			});

		});

	};

	document.addEventListener('DOMContentLoaded', initialize);

})();