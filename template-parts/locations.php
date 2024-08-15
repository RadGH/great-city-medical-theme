<?php


/**
 * Displays a list of locations from the theme General Settings
 *
 * @see Great_City_Medical_Map_Plugin
 * Or go to /plugins/greatcitymedical-map/
 *
 * @global array $args
 */

do_action( 'great-city-medical/locations', $args );

return;

/*

// Optional args supplied by get_template_part
$display_address = $args['address'] ?? true; // unused
$display_phone = $args['phone'] ?? true;
$display_hours = $args['hours'] ?? true; // unused
$icon_color = $args['icon_color'] ?? 'purple'; // unused
$icon_type = $args['icon_type'] ?? 'flat';
$icon_size = $args['icon_size'] ?? ''; // unused
$show_closed_days = $args['show_closed_days'] ?? true;
$allow_location_switching = $args['switching'] ?? false; // whether you can switch locations
$show_map = $args['show_map'] ?? false; // whether to display the google map or not

$locations = gcm_get_locations();
if ( ! $locations ) return;

$html_id = 'L' . uniqid();

// Allow choosing which location is active (for the current page)
$current_location_title = is_singular() ? get_field( 'gcm_location', get_the_ID() ) : false;
$current_location_index = 0;

echo '<div class="locations '. ($allow_location_switching ? 'allow-switching' : 'no-switching') .'">';

// Determine the index of the current location. If not found, ignore the current location value.
if ( $current_location_title ) {
	foreach( $locations as $i => $l ) {
		$title = $l['title'];
		if ( $current_location_title === $title ) $current_location_index = $i;
	}
	if ( ! $current_location_index ) $current_location_title = false;
}

// Radio buttons are displayed first, so they can be used with + selectors in CSS to style the active label and location
if ( $allow_location_switching ) {
	foreach( $locations as $i => $l ) {
		$title = $l['title'];
		
		echo '<input type="radio" class="active-location visually-hidden" name="'. $html_id .'" id="'. $html_id .'-' . $i . '" value="' . $i . '" ' . checked( $current_location_index, $i, false ) . '>';
	}
}

// Display labels which correspond to radio buttons inside the location list.
if ( $allow_location_switching ) {
	echo '<div class="location-labels">';
	foreach( $locations as $i => $l ) {
		$title = $l['title'];
		
		echo '<h3 class="title location-'. $i .'" itemprop="name">';
		echo '<label for="' . $html_id . '-' . $i . '">' . esc_html( $title ) . '</label>';
		echo '</h3>';
	}
	echo '</div>';
}

echo '<div class="location-list">';

// Each location includes: Title, address, phone number, and a list of hours for each day of the week
foreach( $locations as $i => $l ) {
	$title   = $l['title'];
	$address = $l['address'];
	$phone   = $l['phone'];
	$hours   = $l['hours']; // ['sunday'] -> ['saturday']
	$map_embed_code = $l['google_map_embed_code'];
	
	$title = __( $title, 'gcm' );
	
	$classes = array( 'location' );
	$classes[] = 'location-' . $i;
	
	// Default to the first location if no location is specified
	// if ( $current_location_index === $i ) {
	// 	$classes[] = 'active';
	// }
	
	// For schema address markup, see example #3: https://schema.org/address
	?>
	<div class="<?php echo esc_attr(implode(' ', $classes)); ?>" data-location="<?php echo esc_attr($title); ?>" itemscope itemtype="https://schema.org/LocalBusiness">
		
		<?php if ( $title ) { ?>
		<h3 class="title" itemprop="name">
			<?php echo esc_html( $title ); ?>
		</h3>
		<?php } ?>
		
		<?php if ( $address && $display_address ) { ?>
		<div class="address" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
			<?php echo gcm_get_icon_html( 'map-pin', $icon_color, $icon_type, $icon_size ); ?>
			<span class="address-text"><?php echo esc_html( $address ); ?></span>
		</div>
		<?php } ?>
		
		<?php if ( $phone && $display_phone ) { ?>
		<div class="phone" itemprop="telephone">
			<?php echo gcm_get_icon_html( 'phone', $icon_color, $icon_type, $icon_size ); ?>
			<span class="phone-text"><?php echo gcm_format_phone( $phone ); ?></span>
		</div>
		<?php } ?>
		
		<?php if ( $hours && $display_hours ) { ?>
		<div class="hours-list"><?php
			foreach( $hours as $day => $hour_text ) {
				$classes = 'day-' . $day;
				if ( ! $hour_text ) $classes .= ' hours-none';
				
				// monday -> Monday
				$day_text = __( ucwords( $day ), 'gcm' );
				
				$classes = ( 'day-' . $day ) . ( $hour_text ? '' : ' hours-none' );
				
				?>
				<span class="day <?php echo esc_attr($classes); ?>"><?php echo esc_html($day_text); ?></span>
				<span class="hours <?php echo esc_attr($classes); ?>"><?php echo esc_html($hour_text ?: __('Closed', 'gcm') ); ?></span>
				<?php
			}
		?></div>
		<?php } ?>
		
		<?php if ( $show_map && $map_embed_code ) { ?>
		<div class="map-embed">
			<?php echo $map_embed_code; ?>
		</div>
		<?php } ?>
		
	</div>
	<?php
	
	$first = false;
}

echo '</div>'; // .location-list

echo '</div>'; // .locations
*/