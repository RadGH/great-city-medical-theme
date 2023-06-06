(function() {

	let icon_list = null;
	let icon_colors = null;

	// When the page is loaded, prepare our icons
	let initialize_icons = function() {

		// Load settings provided by gcm_icon.php -> gcm_icon_svg_list_js()
		// List of all icons
		/* {"baby": {name: "baby", tags: "baby", "filename": "baby.svg", "url": "https://...", ...} */
		icon_list = window.gcm_icon_settings.icons;

		// List of icon color mapping
		/* {"black": {outline: "#FFF", fill: "#FFF", "fill_light": #FFF, "overlay": #FFF"}, "blue": {} ...} */
		icon_colors = window.gcm_icon_settings.colors;

		// Find all icons that need to have an <svg> created and create the SVG
		let icons = document.querySelectorAll('.gcm-icon:not(.has-svg)');
		icons.forEach(function(el, i, parent) {
			let icon_svg = el.querySelector('svg');
			if ( ! icon_svg ) setup_icon_svg( el );
		});

	}

	// For icons that did not contain an <svg> element, add it manually
	let setup_icon_svg = function( el ) {
		let match;
		let classes = el.classList.toString();

		// name
		match = classes.match(/\bicon-([^ '"]+)\b/);
		let name = match ? match[1] : '';

		// type
		match = classes.match(/\btype-([^ '"]+)\b/);
		let type = match ? match[1] : '';

		// color
		match = classes.match(/\bcolor-([^ '"]+)\b/);
		let color = match ? match[1] : '';

		// get the icon settings
		let icon = icon_list.hasOwnProperty(name) ? icon_list[name] : false;

		// get the svg
		let svg = icon.svg;

		// change the color
		svg = convert_svg_color( svg, name, color, type );

		if ( ! icon ) {
			console.log('[gcm-icons.js] Cannot load icon, name not found in icon list: "'+ name +'"', el);
			return;
		}

		// Create html element
		let temp_el = document.createElement('div');
		temp_el.innerHTML = svg;

		// Add SVG and class
		el.append(temp_el);
		el.classList.add('has-svg');

		// Unwrap html element to remove the temporary <div>
		temp_el.replaceWith( ...temp_el.childNodes );

		console.log('[gcm-icons.js] Inserted icon "' + name + '"', el);
	};

	let convert_svg_color = function( svg, name = '', color = '', type = '' ) {
		if (type !== 'circle' && type !== 'flat') {
			type = '';
		}

		if (color !== 'purple' && color !== 'blue' && color !== 'black') {
			color = 'purple';
		}

		const nC = icon_colors[color] || false;
		if ( !nC ) return svg;

		let newColor = {
			outline:    nC.outline,
			fill:       nC.fill,
			fill_light: nC.fill_light,
			overlay:    nC.overlay,
		};


		if (type === 'flat') {
			newColor.fill = '';
			newColor.fill_light = '';
		}

		for (const i in newColor) {
			const newHex = newColor[i];
			const oldHex = icon_colors['purple'][i];
			// console.log( i + ' from ', newHex, ' to ', oldHex );
			if ( oldHex ) {
				svg = svg.replace(new RegExp(oldHex, 'ig'), newHex);
			}else{
				console.log( 'No old hex!', i );
			}
		}

		return svg;
	};

	if (document.readyState !== 'loading') {
		initialize_icons();
	}else{
		document.addEventListener('DOMContentLoaded', initialize_icons);
	}
})();