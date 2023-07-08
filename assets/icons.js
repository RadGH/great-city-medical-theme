
wp.domReady( () => {
	const { __ } = wp.i18n;
	const { addFilter } = wp.hooks;

	function addCustomIcons( icons ) {

		const customIcons = [
			{
				name: 'cloud',
				title: __( 'Cloud', 'gcm' ),
				icon: '<svg width="24px" height="24px" viewBox="0 0 24 24"><path d="M12.0297869,6.25477399 C9.69310799,6.35627347 7.76028359,8.06517251 7.33640731,10.3195752 L7.33,10.357 L7.17131855,10.3970995 C5.4791682,10.8693286 4.25,12.4228808 4.25,14.25 C4.25,16.4591229 6.04086573,18.25 8.25,18.25 L16.25,18.25 C18.4591136,18.25 20.25,16.4591136 20.25,14.25 L20.2449807,14.0481533 C20.1583164,12.3092839 18.9581728,10.8518379 17.3286997,10.3970993 L17.169,10.357 L17.1636012,10.3195631 C16.726443,7.99471518 14.6845932,6.25 12.25,6.25 L12.0297869,6.25477399 Z M12.25,7.75 C14.1089517,7.75 15.641164,9.20368247 15.7444701,11.050879 C15.7655051,11.4270003 16.0622764,11.7291586 16.4379585,11.7569554 C17.7370378,11.8530748 18.75,12.9390845 18.75,14.25 C18.75,15.6306864 17.6306864,16.75 16.25,16.75 L8.25,16.75 C6.86929499,16.75 5.75,15.6306979 5.75,14.25 C5.75,12.9390902 6.76297645,11.8530752 8.06206149,11.7569554 C8.43774872,11.7291582 8.7345221,11.4269924 8.7555506,11.0508656 C8.85882307,9.20368024 10.391028,7.75 12.25,7.75 Z"></path></svg>',
				categories: [ 'category-one', 'category-two' ],
			},
		];

		const customIconCategories = [
			{
				name: 'branding',
				title: __( 'Branding', 'gcm' ),
			},
			{
				name: 'theme',
				title: __( 'Theme', 'gcm' ),
			},
		];

		const customIconType = [
			{
				isDefault: true,
				type: 'example-icons',
				title: __( 'Example Icons', 'example-theme' ),
				icons: customIcons,
				categories: customIconCategories,
			},
		];

		const allIcons = [].concat( icons, customIconType );

		return allIcons;
	}

	addFilter(
		'iconBlock.icons',
		'great-city-medical/icons',
		addCustomIcons
	);
} );