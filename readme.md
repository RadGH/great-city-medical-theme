Great City Medical
-

A custom WordPress theme for Great City Medical.

Built by Radley Sustaire, using PHPStorm.

Designed by Pavel, using Figma.

## Build process

This theme uses the official standard [@wp-scripts](https://github.com/WordPress/gutenberg/blob/trunk/packages/scripts/README.md) to compile the JS scripts, with a few additional packages to assist with compiling sass files.

### Configuration

The build process is configured in the `package.json` file. The most important settings are:

1. JS source: /assets/js-src/*.js
2. JS output: /assets/js-build/*.js
3. JS include: /assets/js-build/*.asset.php
   * This php file is used when enqueueing the JS files, and automatically includes the dependencies that were imported by the script.

5. SCSS source: /\*.scss
5. SCSS output: /\*.css
6. SCSS map: /\*.css.map
   * This source map tells your browser how to map the compiled CSS to the original SCSS files. This is useful for debugging. 

7. Additional SCSS includes are located in /assets/styles/. These are not compiled directly, they are imported in the main scss files.
8. The theme uses the NPM package `sass` (dart-sass) to compile the SCSS files.
9. The theme uses the NPM package `concurrently` to run multiple build processes at once.

### Preparing the build process

1. Install [npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) on your system, if needed.
2. Open terminal or command prompt.
3. Navigate to the theme root.
3. Run: `npm install`

You are now ready to use the build process. You do NOT need to repeat those steps unless package.json is updated, in which case you can simply repeat: `npm install`

**Manual**

To compile all JS/SCSS files _once_:

    npm run build

**Automatic**

To compile all JS/SCSS files _automatically_:

    npm run start

