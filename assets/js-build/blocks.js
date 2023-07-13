/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@wordpress/icons/build-module/library/fullscreen.js":
/*!**************************************************************************!*\
  !*** ./node_modules/@wordpress/icons/build-module/library/fullscreen.js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_primitives__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/primitives */ "@wordpress/primitives");
/* harmony import */ var _wordpress_primitives__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_primitives__WEBPACK_IMPORTED_MODULE_1__);


/**
 * WordPress dependencies
 */

const fullscreen = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_primitives__WEBPACK_IMPORTED_MODULE_1__.SVG, {
  xmlns: "http://www.w3.org/2000/svg",
  viewBox: "0 0 24 24"
}, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_primitives__WEBPACK_IMPORTED_MODULE_1__.Path, {
  d: "M4.2 9h1.5V5.8H9V4.2H4.2V9zm14 9.2H15v1.5h4.8V15h-1.5v3.2zM15 4.2v1.5h3.2V9h1.5V4.2H15zM5.8 15H4.2v4.8H9v-1.5H5.8V15z"
}));
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (fullscreen);
//# sourceMappingURL=fullscreen.js.map

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/compose":
/*!*********************************!*\
  !*** external ["wp","compose"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["compose"];

/***/ }),

/***/ "@wordpress/dom-ready":
/*!**********************************!*\
  !*** external ["wp","domReady"] ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["wp"]["domReady"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/primitives":
/*!************************************!*\
  !*** external ["wp","primitives"] ***!
  \************************************/
/***/ ((module) => {

module.exports = window["wp"]["primitives"];

/***/ }),

/***/ "@wordpress/rich-text":
/*!**********************************!*\
  !*** external ["wp","richText"] ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["wp"]["richText"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*********************************!*\
  !*** ./assets/js-src/blocks.js ***!
  \*********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/dom-ready */ "@wordpress/dom-ready");
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/rich-text */ "@wordpress/rich-text");
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_icons__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/icons */ "./node_modules/@wordpress/icons/build-module/library/fullscreen.js");
// General





// Used to create new blocks


// Formatting Toolbar API




// For adding custom fields to blocks





// To add blocks inside a new block


// Icons



// Specific icon elements that can be used as parameters for registerBlockType etc


// For using toggle fields within custom fields of blocks


// import { BlockControls } from '@wordpress/block-editor';
// import { ToolbarGroup, ToolbarButton } from '@wordpress/components';
// import { edit } from '@wordpress/icons';

// Once WordPress has loaded
_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0___default()(function () {
  // Load the GCM icon for use in the block editor
  // /assets/logo/block-editor-icon-medium.svg

  const gcm_icon = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.SVG, {
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 11.582 11.515"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Path, {
    d: "M5.791 0C2.596 0 0 2.582 0 5.758c0 3.177 2.597 5.758 5.793 5.758 3.194 0 5.789-2.581 5.789-5.758S8.985 0 5.791 0Zm0 .5c2.926 0 5.291 2.353 5.291 5.258s-2.363 5.258-5.289 5.258C2.865 11.016.5 8.663.5 5.758.5 2.854 2.864.5 5.791.5Z"
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Path, {
    d: "M4.39 3.076c-.495 0-.952.278-1.273.672-.32.394-.515.923-.437 1.467.037.262.18.525.373.832.193.306.443.644.717.988A38.5 38.5 0 0 0 5.404 8.92l.176.191.584-.58-.351-.355-.211.209A34.44 34.44 0 0 1 4.16 6.723a11.036 11.036 0 0 1-.685-.944c-.178-.28-.284-.526-.3-.634v-.002c-.054-.382.085-.778.329-1.079.244-.3.584-.488.887-.488.26 0 .478.091.648.207.17.116.292.264.336.336l.26.43.185-.467a.812.812 0 0 1 .266-.303c.155-.11.377-.203.701-.203.359 0 .835.256 1.088.647.253.39.32.883-.096 1.474l.409.287c.515-.731.453-1.495.107-2.03-.346-.536-.936-.878-1.508-.878a1.7 1.7 0 0 0-.99.295c-.117.082-.147.17-.219.26-.083-.09-.132-.176-.258-.262a1.653 1.653 0 0 0-.93-.293Z"
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Path, {
    d: "M5.54 6.797v.5h2.608v-.5z"
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Path, {
    d: "M6.594 5.742v2.61h.5v-2.61z"
  }));

  // -------------
  // Custom Styles
  // -------------

  // Add custom button styles
  // Also see classic editor versions in editor.php -> gcm_insert_editor_formats()
  let setup_button_styles = function () {
    // Temporarily remove built-in button styles
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.unregisterBlockStyle)('core/button', 'outline');

    // button styles were moved to separate button color / button style fields
    // @see register_button_theme_select()
    return;
  };

  // Groups have some advanced formatting options for positioning and overlays (and rounding, that's separate)
  /*
  let setup_group_styles = function() {
  	let settings = {
  		'blocks': [ 'core/group' ],
  		'styles': [
  			{
  				name: 'relative',
  				label: 'Relative'
  			},
  			{
  				name: 'overlay',
  				label: 'Overlay'
  			},
  		]
  	};
  		settings.blocks.forEach( block_name => {
  		settings.styles.forEach( style => {
  			registerBlockStyle( block_name, style );
  		});
  	});
  };
  */

  // Rounded corners can be applied to groups or images
  let setup_rounded_styles = function () {
    // Temporarily remove built-in button styles
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.unregisterBlockStyle)('core/group', 'rounded');
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.unregisterBlockStyle)('core/image', 'rounded');

    // Add new styles
    let settings = {
      'blocks': ['core/group', 'core/image'],
      'styles': [{
        name: 'rounded',
        label: 'Rounded (Circle)'
      }, {
        name: 'rounded-hero',
        label: 'Rounded (Hero)'
      }]
    };
    settings.blocks.forEach(block_name => {
      settings.styles.forEach(style => {
        (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockStyle)(block_name, style);
      });
    });
  };

  // ------------
  // Text Formats (using text format toolbar)
  // ------------

  let register_text_formats = function () {
    let custom_formats = [{
      formatName: 'gcm/h1',
      title: 'H1',
      className: 'heading-h1'
    }, {
      formatName: 'gcm/h2',
      title: 'H2',
      className: 'heading-h2'
    }, {
      formatName: 'gcm/h3',
      title: 'H3',
      className: 'heading-h3'
    }, {
      formatName: 'gcm/h4',
      title: 'H4',
      className: 'heading-h4'
    }, {
      formatName: 'gcm/h5',
      title: 'H5',
      className: 'heading-h5'
    }, {
      formatName: 'gcm/h6',
      title: 'H6',
      className: 'heading-h6'
    }, {
      formatName: 'gcm/eyebrow',
      title: 'Eyebrow Text',
      className: 'heading-eyebrow-text'
    }, {
      formatName: 'gcm/lowercase',
      title: 'Lower Case (abc)',
      className: 'text-lowercase'
    }, {
      formatName: 'gcm/uppercase',
      title: 'Upper Case (ABC)',
      className: 'text-uppercase'
    }];
    let edit_callback = function (format, props) {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.RichTextToolbarButton, {
        title: format.title,
        icon: format.icon || 'editor-gcm-icon',
        isActive: props.isActive,
        onClick: function () {
          props.onChange((0,_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_3__.toggleFormat)(props.value, {
            type: format.formatName
          }));
        }
      });
    };
    custom_formats.forEach(format => {
      (0,_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_3__.registerFormatType)(format.formatName, {
        title: format.title,
        className: format.className,
        tagName: 'span',
        edit: props => {
          return edit_callback(format, props);
        }
      });
    });
  };

  // -------------
  // Custom blocks
  // -------------

  // Custom formats for headings
  let register_heading_blocks = function () {
    // Heading (Eyebrow)
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('gcm/heading-eyebrow', {
      title: 'Heading (Eyebrow)',
      icon: 'gcm',
      category: 'great-city-medical',
      attributes: {
        content: {
          type: 'string',
          source: 'html',
          selector: 'div'
        }
      },
      edit: function (props) {
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(wp.blockEditor.RichText, {
          className: 'heading-eyebrow-title',
          tagName: 'div',
          onChange: c => {
            props.setAttributes({
              content: c
            });
          },
          value: props.attributes.content,
          placeholder: 'Enter text...'
        });
      },
      save: function (props) {
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(wp.blockEditor.RichText.Content, {
          className: 'heading-eyebrow-title',
          tagName: 'div',
          value: props.attributes.content
        });
      }
    });
  };

  // -------------
  // Custom fields (for use within custom blocks)
  // -------------

  let register_button_theme_select = function () {
    // Add a custom field for button block to choose the button color
    const buttonColorSelect = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_5__.createHigherOrderComponent)(BlockEdit => {
      const styles = [{
        name: 'purple',
        className: 'button-color-purple',
        label: 'Purple'
      }, {
        name: 'blue',
        className: 'button-color-blue',
        label: 'Blue'
      }, {
        name: 'black',
        className: 'button-color-black',
        label: 'Black'
      }, {
        name: 'white',
        className: 'button-color-white',
        label: 'White'
      }];

      // Get all classes so that we can easily remove them all when the selection changes
      let all_classes = styles.map(style => style.className).filter(val => val !== '');
      return props => {
        const {
          name,
          attributes,
          setAttributes,
          isSelected
        } = props;
        const {
          myAttribute
        } = attributes;

        // Only enable for button elements
        if (name !== 'core/button') {
          return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, {
            ...props
          });
        }
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, {
          ...props
        }), isSelected && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.PanelBody, {
          title: "Button Colors",
          initialOpen: true
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: "gcm-editor-button-colors gcm-editor--button-group"
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.ButtonGroup, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: "gcm-editor--button-group--grid"
        }, styles.map(style => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Button, {
          isPrimary: props.attributes.className && props.attributes.className.includes(style.className),
          isSecondary: props.attributes.className && !props.attributes.className.includes(style.className),
          onClick: () => {
            // Create a copy of the className
            let className = props.attributes.className ? props.attributes.className : '';

            // Remove all the existing button classes
            all_classes.forEach(cls => {
              className = className.replace(cls, '');
            });

            // Trim whitespace
            className = className.trim();

            // Add the selected class if it exists
            className = `${className} ${style.className}`.trim();

            // Update the block's className attribute
            props.setAttributes({
              className: className
            });
          },
          className: "color-" + style.name
        }, style.label))))))));
      };
    }, 'buttonColorSelect');
    wp.hooks.addFilter('editor.BlockEdit', 'gcm/register_button_color_select', buttonColorSelect);

    // Add a custom field for button block to choose the button style
    const buttonStyleSelect = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_5__.createHigherOrderComponent)(BlockEdit => {
      const styles = [{
        name: 'primary',
        className: 'button-style-primary',
        altTitle: 'Solid background',
        label: 'Primary'
      }, {
        name: 'secondary',
        className: 'button-style-secondary',
        altTitle: 'Transparent background',
        label: 'Secondary'
      }, {
        name: 'outline',
        className: 'button-style-outline',
        altTitle: 'No background',
        label: 'Outline'
      }, {
        name: 'text',
        className: 'button-style-text',
        altTitle: 'No border or background',
        label: 'Text'
      }];

      // Get all classes so that we can easily remove them all when the selection changes
      let all_classes = styles.map(style => style.className).filter(val => val !== '');
      return props => {
        const {
          name,
          attributes,
          setAttributes,
          isSelected
        } = props;
        const {
          myAttribute
        } = attributes;

        // Only enable for button elements
        if (name !== 'core/button') {
          return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, {
            ...props
          });
        }
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, {
          ...props
        }), isSelected && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.PanelBody, {
          title: "Button Styles",
          initialOpen: true
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: "gcm-editor-button-styles gcm-editor--button-group"
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.ButtonGroup, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: "gcm-editor--button-group--grid"
        }, styles.map(style => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.Button, {
          title: style.altTitle,
          isPrimary: props.attributes.className && props.attributes.className.includes(style.className),
          isSecondary: props.attributes.className && !props.attributes.className.includes(style.className),
          onClick: () => {
            // Create a copy of the className
            let className = props.attributes.className ? props.attributes.className : '';

            // Remove all the existing button classes
            all_classes.forEach(cls => {
              className = className.replace(cls, '');
            });

            // Trim whitespace
            className = className.trim();

            // Add the selected class if it exists
            className = `${className} ${style.className}`.trim();

            // Update the block's className attribute
            props.setAttributes({
              className: className
            });
          },
          className: "style-" + style.name
        }, style.label))))))));
      };
    }, 'buttonStyleSelect');
    wp.hooks.addFilter('editor.BlockEdit', 'gcm/register_button_style_select', buttonStyleSelect);
  };

  // -------------
  // Custom fields for groups to choose display type
  // -------------

  /*
  let register_group_display_field = function() {
  		// Add a custom field for button block to choose the button style
  	const groupDisplaySelect = createHigherOrderComponent( ( BlockEdit ) => {
  		const styles = [
  			{
  				name: 'relative',
  				className: 'group-display-relative',
  				label: 'Relative'
  			},
  			{
  				name: 'absolute',
  				className: 'group-display-absolute',
  				label: 'Absolute'
  			},
  		];
  			// Get all classes so that we can easily remove them all when the selection changes
  		let all_classes = styles.map( style => style.className ).filter(val => val !== '');
  			return (props) => {
  			const { name, attributes, setAttributes, isSelected } = props;
  			const { myAttribute, showButtonGroup } = attributes;
  				// Only enable for button elements
  			if (name !== 'core/group') {
  				return (
  					<BlockEdit {...props} />
  				);
  			}
  				return (
  				<Fragment>
  					<BlockEdit {...props} />
  					{isSelected && (
  						<InspectorControls>
  							<PanelBody title="Position" initialOpen={true}>
  								<ToggleControl
  									label="Enable positioning"
  									checked={showButtonGroup}
  									onChange={(value) => setAttributes({ showButtonGroup: value })}
  								/>
  								{showButtonGroup && (
  									<div className="gcm-editor-group-styles gcm-editor--button-group">
  										<ButtonGroup>
  											<div className="gcm-editor--button-group--grid">
  												{styles.map((style) => (
  													<Button
  														isRelative={props.attributes.className && props.attributes.className.includes(style.className)}
  														isPositioned={props.attributes.className && !props.attributes.className.includes(style.className)}
  														onClick={() => {
  															// Create a copy of the className
  															let className = props.attributes.className ? props.attributes.className : '';
  																// Remove all the existing button classes
  															all_classes.forEach((cls) => {
  																className = className.replace(cls, '');
  															});
  																// Trim whitespace
  															className = className.trim();
  																// Add the selected class if it exists
  															className = `${className} ${style.className}`.trim();
  																// Update the block's className attribute
  															props.setAttributes({ className: className });
  														}}
  														className={"display-" + style.name}
  													>
  														{style.label}
  													</Button>
  												))}
  											</div>
  										</ButtonGroup>
  									</div>
  								)}
  							</PanelBody>
  						</InspectorControls>
  					)}
  				</Fragment>
  			);
  		};
  	}, 'groupDisplaySelect' );
  		wp.hooks.addFilter( 'editor.BlockEdit', 'gcm/register_group_display_select', groupDisplaySelect );
  	};
   */

  // -------------
  // Positioning blocks
  // -------------

  let register_positioned_blocks = function () {
    // Positioned Container Block
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('gcm/positioned-container', {
      title: 'Positioned Container',
      description: '"Positioned Element" blocks are attached relative to this container, overlapping any other blocks within the container.',
      icon: _wordpress_icons__WEBPACK_IMPORTED_MODULE_7__["default"],
      //'grid-view',
      category: 'layout',
      attributes: {
        className: {
          type: 'string',
          default: ''
        }
      },
      edit: props => {
        const {
          className
        } = props.attributes;
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: `positioned-container ${className}`
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InnerBlocks, {
          template: [['gcm/positioned-element']],
          templateLock: false
        }));
      },
      save: props => {
        const {
          className
        } = props.attributes;
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: `positioned-container ${className}`
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InnerBlocks.Content, null));
      }
    });

    // Positioned Element Block
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('gcm/positioned-element', {
      title: 'Positioned Element',
      description: 'This element MUST be contained in a "Positioned Container". It will appear on top of other blocks in the container.',
      icon: 'editor-contract',
      category: 'layout',
      attributes: {
        className: {
          type: 'string',
          default: ''
        }
      },
      edit: props => {
        const {
          className
        } = props.attributes;
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: `positioned-element ${className}`
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InnerBlocks, {
          template: [['core/paragraph', {
            placeholder: 'Add content here...'
          }]],
          templateLock: false
        }));
      },
      save: props => {
        const {
          className
        } = props.attributes;
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)("div", {
          className: `positioned-element ${className}`
        }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__.InnerBlocks.Content, null));
      }
    });
  };

  // ----------------------------
  // Initialize styles and blocks
  // ----------------------------

  // Styles
  setup_button_styles();

  // setup_group_styles();

  setup_rounded_styles();

  // Text formats (used in paragraph dropdown, etc)
  register_text_formats();

  // Custom blocks
  register_heading_blocks();

  // Custom button theme fields
  register_button_theme_select();

  // Custom group display fields
  // register_group_display_field();

  // Positioned blocks (position container + positioned element)
  register_positioned_blocks();
});
})();

/******/ })()
;
//# sourceMappingURL=blocks.js.map