(function() {

	const initialize = function() {

		setup_mobile_menu_button();

		setup_click_menus();

		prevent_language_preview_click();

	};

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
			return matchMedia('(pointer:coarse)').matches;
		};

		// When a menu is opened, check if you clicked out of the menu. if so, close the menu instead
		const clicked_unknown_item = function(e) {
			if ( ! monitor_unknown_clicks ) return;

			// Only run once, re-hooked when each menu is opened
			monitor_unknown_clicks = false;

			// Check for any open menus
			let other_menus = document.querySelectorAll('.sub-menu-open');
			if ( other_menus.length < 1 ) return;

			// Close menus
			other_menus.forEach(function(m) {
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
			if ( link.nodeName !== 'A' ) return clicked_unknown_item(e);

			// Allow the click if it is within an open sub menu
			if ( menu.matches('.sub-menu-open') || menu.closest('.sub-menu-open') ) return;

			// The link must be in a menu item containing a sub menu
			if ( ! menu.classList.contains('menu-item-has-children') ) return clicked_unknown_item(e);

			// Close any open sub menus
			let other_menus = document.querySelectorAll('.sub-menu-open');
			other_menus.forEach(function(m) {
				m.classList.remove('sub-menu-open');
			});

			// Open the new sub menu
			menu.classList.add('sub-menu-open');

			// Monitor clicks outside the menu in order to automatically close the menu
			monitor_unknown_clicks = true;

			// Prevent the link from opening
			e.preventDefault();
			e.stopPropagation();
		});
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

	document.addEventListener('DOMContentLoaded', initialize);

})();