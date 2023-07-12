/*
import { Icon } from '@wordpress/components';

const icon_gcm = () => (
	<Icon
		icon={
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
				<circle xmlns="http://www.w3.org/2000/svg" cx="6" cy="6" r="5.85" fill="#9069ac" stroke="#9069ac" stroke-width="0.25px" fill-opacity="0.05"/>
				<path fill="#4c4d4f" d="M7.138 5.784v1.124H6.013v.356h1.125v1.124h.355V7.264h1.13v-.356h-1.13V5.784z" />
				<path fill="#0957de" d="M4.776 3.126c-.45 0-.88.255-1.183.627-.303.372-.483.87-.41 1.377.032.226.166.485.355.785.19.3.437.637.709.979a38.204 38.204 0 0 0 1.63 1.878l.093.102.498-.494-.186-.19-.299.3a36.027 36.027 0 0 1-1.527-1.762 11.123 11.123 0 0 1-.693-.954c-.181-.287-.298-.538-.319-.683-.06-.42.093-.848.356-1.17.262-.322.629-.53.976-.53.29 0 .53.099.715.225.186.126.317.283.371.373L6 4.218l.1-.248a.891.891 0 0 1 .304-.356 1.3 1.3 0 0 1 .77-.222c.409 0 .91.274 1.185.699.275.425.342.98-.097 1.605l.216.153c.493-.699.428-1.401.104-1.903-.324-.501-.886-.82-1.408-.82-.4 0-.706.119-.922.271-.153.108-.211.223-.281.334-.086-.109-.169-.224-.33-.334a1.53 1.53 0 0 0-.864-.271Z" />
			</svg>
		}
	/>
);
*/

// Great City Medical - Icon
// assets/logo/icon.svg
/*
const icon_gcm = wp.element.createElement(
	'svg',
	{
		xmlns: "http://www.w3.org/2000/svg",
		viewBox: "0 0 12 12"
	},
	wp.element.createElement(
		'circle',
		{
			xmlns: "http://www.w3.org/2000/svg",
			cx: "6",
			cy: "6",
			r: "5.85",
			fill: "#9069ac",
			stroke: "#9069ac",
			"stroke-width": "0.25px",
			"fill-opacity": "0.05"
		}
	),
	wp.element.createElement(
		'path',
		{
			fill: "#4c4d4f",
			d: "M7.138 5.784v1.124H6.013v.356h1.125v1.124h.355V7.264h1.13v-.356h-1.13V5.784z"
		}
	),
	wp.element.createElement(
		'path',
		{
			fill: "#0957de",
			d: "M4.776 3.126c-.45 0-.88.255-1.183.627-.303.372-.483.87-.41 1.377.032.226.166.485.355.785.19.3.437.637.709.979a38.204 38.204 0 0 0 1.63 1.878l.093.102.498-.494-.186-.19-.299.3a36.027 36.027 0 0 1-1.527-1.762 11.123 11.123 0 0 1-.693-.954c-.181-.287-.298-.538-.319-.683-.06-.42.093-.848.356-1.17.262-.322.629-.53.976-.53.29 0 .53.099.715.225.186.126.317.283.371.373L6 4.218l.1-.248a.891.891 0 0 1 .304-.356 1.3 1.3 0 0 1 .77-.222c.409 0 .91.274 1.185.699.275.425.342.98-.097 1.605l.216.153c.493-.699.428-1.401.104-1.903-.324-.501-.886-.82-1.408-.82-.4 0-.706.119-.922.271-.153.108-.211.223-.281.334-.086-.109-.169-.224-.33-.334a1.53 1.53 0 0 0-.864-.271Z",
		}
	)
);
*/

// ##############
// Register icons
// wp.components.Icon.add( 'gcm', icon_gcm );


// ############
// Block styles
/*
wp.blocks.registerBlockStyle('core/heading', {
	name: 'eyebrow',
	label: 'Eyebrow'
});
*/


// #############
// Custom Blocks

// When WP is loaded
wp.domReady(function () {

	let setup_button_styles = function() {
		// Remove built-in button styles
		wp.blocks.unregisterBlockStyle('core/button', 'outline');

		// Add custom button styles for primary and secondary buttons
		// Styles mimic editor.php -> gcm_insert_editor_formats()

		// Style
		// (note: primary is the default)
		wp.blocks.registerBlockStyle('core/button', {
			name: 'secondary',
			label: 'Secondary'
		});
		wp.blocks.registerBlockStyle('core/button', {
			name: 'outline',
			label: 'Outline'
		});
		wp.blocks.registerBlockStyle('core/button', {
			name: 'text',
			label: 'Text'
		});

		// Color
		wp.blocks.registerBlockStyle('core/button', {
			name: 'purple',
			label: 'Purple'
		});
		wp.blocks.registerBlockStyle('core/button', {
			name: 'blue',
			label: 'Blue'
		});
		wp.blocks.registerBlockStyle('core/button', {
			name: 'black',
			label: 'Black'
		});
		wp.blocks.registerBlockStyle('core/button', {
			name: 'white',
			label: 'White'
		});

	}

	let setup_group_styles = function() {
	};

	let setup_heading_styles = function() {
		// Heading (Eyebrow)
		wp.blocks.registerBlockType('gcm/heading-eyebrow', {
			title: 'Heading (Eyebrow)',
			icon: 'gcm',
			category: 'great-city-medical',
			attributes: {
				content: {
					type: 'string',
					source: 'html',
					selector: 'div',
				},
			},
			edit: function (props) {
				return wp.element.createElement(wp.blockEditor.RichText, {
					className: 'heading-eyebrow-title',
					tagName: 'div',
					onChange: (c) => { props.setAttributes({ content: c }) },
					value: props.attributes.content,
					placeholder: 'Enter text...'
				});
			},
			save: function (props) {
				return wp.element.createElement(wp.blockEditor.RichText.Content, {
					className: 'heading-eyebrow-title',
					tagName: 'div',
					value: props.attributes.content
				});
			},
		});
	}

	/*
	wp.blocks.registerBlockType('gcm/my-block', {
		title: 'My Block',
		category: 'great-city-medical',
		icon: 'smiley',
		supports: {
			html: false,  // Disables the HTML edit mode
		},
		edit: (props) => {
			return wp.element.createElement(
				wp.blockEditor.InnerBlocks,
				{
					template: [
						['core/image', {}],
						['core/paragraph', { placeholder: 'Enter text...' }],
					],
					templateLock: 'all',
				}
			);
		},
		save: () => {
			return wp.element.createElement(wp.blockEditor.InnerBlocks.Content);
		},
	});
	*/

	setup_button_styles();

	setup_group_styles();

	setup_heading_styles();

});