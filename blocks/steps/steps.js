(() => {


const Steps_Block = function( e ) {
	if ( ! e instanceof HTMLElement ) return console.log('Steps_Block: element "e" is not an HTML node', e);

	let block = this;

	block.element = e;
	block.x = null;
	block.y = null;
	block.w = null;
	block.h = null;

	block.nodes = block.element.querySelectorAll('.node');
	block.coords = [];
	block.svg = null;
	block.paths = null;

	// Create an <svg> with a path connecting every node
	block.init = function() {

		// What this should do:
		// 1: Create an SVG element that covers the same area as the parent element
		// 2. Create a path that connects each node to a midpoint node, allowing a smooth curve between each node
		// 3. Create a circle at each node and at the midpoint node
		// 4. Create a circle at each control point to indicate curvature

		// Create an SVG element
		block.svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

		// Set initial styles that do not change
		block.set_svg_static_styles();

		// Reposition the SVG
		block.reposition();

		// Calculate the coordinates of each node
		block.calculate_coordinates();

		// Create paths connecting each coordinate with an arced line
		block.create_paths();

		// Append to body
		document.body.appendChild( block.svg );

		// Recalculate when the window resizes
		window.addEventListener('resize', block.window_resized );

	};


	block.set_svg_static_styles = function() {
		// Initial styles (does not change)
		block.element.style.position = 'relative';
		block.element.style.zIndex = 2;

		block.svg.style.position = 'absolute';
		block.svg.style.zIndex = 1;
	};

	block.calculate_coordinates = function() {
		// Get the coordinates of each node relative to the parent element
		block.coords = [];

		block.nodes.forEach( node => {
			let x = node.offsetLeft + node.offsetWidth / 2;
			let y = node.offsetTop + node.offsetHeight / 2;

			block.coords.push({
				x: x,
				y: y
			});
		});

		console.log( 'coords', block.coords );
	};

	block.reposition = function() {

		// Get the position of the parent element
		let px = block.element.offsetLeft;
		let py = block.element.offsetTop;
		let pw = block.element.offsetWidth;
		let ph = block.element.offsetHeight;

		// Add margin top from the html element to adjust for the admin bar
		let marginTop = parseInt( window.getComputedStyle( document.querySelector('html') ).marginTop );
		if ( marginTop > 0 ) py += marginTop;

		// If the position has not changed, do nothing
		if ( block.x === px && block.y === py && block.w === pw && block.h === ph ) return;

		// Reposition the SVG beneath the parent element
		block.svg.style.left = px;
		block.svg.style.top = py;
		block.svg.style.width = pw;
		block.svg.style.height = ph;

	};

	block.create_paths = function() {
		// Connect each coordinate with an arced line
		block.paths = [];

		// Create a path from each node to the next node
		for ( let i = 0; i < block.coords.length - 1; i++ ) {
			let coord_1 = block.coords[i];
			let coord_2 = block.coords[i+1];
			let path = block.create_path_between_coords( coord_1, coord_2 );
			block.svg.appendChild( path );
		}
	};

	block.create_path_between_coords = function( coord_1, coord_2 ) {
		const path = document.createElementNS("http://www.w3.org/2000/svg", "path");

		// Create a line connecting the two coordinates with an arc using a control point
		let x_mid = ( coord_2.x - coord_1.x ) / 2;
		let y_mid = ( coord_2.y - coord_1.y ) / 2;

		let x1 = coord_1.x;
		let y1 = coord_1.y;

		let c1x, c1y, c2x, c2y;

		// Check if window >= 1000px, change the direction of curve accordingly
		if ( window.innerWidth >= 1000 ) {
			c1x = coord_1.x + x_mid;
			c1y = coord_1.y;

			c2x = coord_1.x + x_mid;
			c2y = coord_2.y;
		}else{
			c1x = coord_1.x;
			c1y = coord_1.y + y_mid;

			c2x = coord_2.x;
			c2y = coord_1.y + y_mid;
		}


		let x2 = coord_2.x;
		let y2 = coord_2.y;


		// path string starts at coord_1, control point 1 to the right 50%, control point 2 to the top or bottom, then connects to coord_2
		let path_str = `M ${x1} ${y1} C ${c1x} ${c1y} ${c2x} ${c2y} ${x2} ${y2}`;
		path.setAttribute( "d", path_str );

		// Set SVG styles (you can customize these as needed)
		path.setAttribute("fill", "none");
		path.setAttribute("stroke", "#9069ac");
		path.setAttribute("stroke-opacity", "0.5");
		path.setAttribute("stroke-width", "2");
		path.setAttribute("stroke-dasharray", "14 14");

		// USEFUL FOR DEBUGGING:
		// Create a circle at each end of the path
		block.create_circle( block.svg, x1, y1, 5 );
		block.create_circle( block.svg, c1x, c1y, 2 );
		block.create_circle( block.svg, c2x, c2y, 2 );
		block.create_circle( block.svg, x2, y2, 5 );

		return path;
	};

	block.create_circle = function( element, x, y, r ) {
		const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
		circle.setAttribute("cx", x);
		circle.setAttribute("cy", y);
		circle.setAttribute("r", r);
		circle.setAttribute("fill", "none");
		element.appendChild(circle);
	};

	block.window_resized = function() {
		// Delete the path and recalculate everything
		block.svg.remove();
		block.init();
	};


	setTimeout(function() {
		block.init();
	}, 500);


}; // Steps_Block

document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('.gcm-steps-list').forEach( e => new Steps_Block( e ) );
});

})();