<?php
// Displays a list of locations from the theme General Settings

// Optional args supplied by get_template_part
$display_address = $args['address'] ?? true; // unused
$display_phone = $args['phone'] ?? true;
$display_hours = $args['hours'] ?? true; // unused
$icon_color = $args['icon_color'] ?? 'purple'; // unused
$icon_type = $args['icon_type'] ?? 'flat';
$icon_size = $args['icon_size'] ?? ''; // unused
$show_closed_days = $args['show_closed_days'] ?? true;

$locations = gcm_get_locations();
if ( ! $locations ) return;

echo '<div class="location-list">';

// Each location includes: Title, address, phone number, and a list of hours for each day of the week
foreach( $locations as $i => $l ) {
	$title   = $l['title'];
	$address = $l['address'];
	$phone   = $l['phone'];
	$hours   = $l['hours']; // ['sunday'] -> ['saturday']
	
	$title = __( $title, 'gcm' );
	
	// For schema address markup, see example #3: https://schema.org/address
	?>
	<div class="location" data-location="<?php echo esc_attr($title); ?>" itemscope itemtype="https://schema.org/LocalBusiness">
		
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
				
				/* <div class="hours-item day-<?php echo esc_attr($day); ?> <?php if ( ! $hour_text ) echo 'closed'; ?>"> */
				?>
					<span class="day <?php echo esc_attr($classes); ?>"><?php echo esc_html($day_text); ?></span>
					<span class="hours <?php echo esc_attr($classes); ?>"><?php echo esc_html($hour_text ?: __('Closed', 'gcm') ); ?></span>
				<?php
				/* </div> */
				
			}
		?></div>
		<?php } ?>
		
	</div>
	<?php
	
	$first = false;
}

echo '</div>'; // .location-list