<?php
// Displays a list of locations from the theme General Settings

// Optional args supplied by get_template_part
$display_address = $args['address'] ?? true; // unused
$display_phone = $args['phone'] ?? true;
$display_hours = $args['hours'] ?? true; // unused
$circle_icon = $args['circle_icon'] ?? false;
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
	
	$icon_type = $circle_icon ? 'type-circle' : 'type-flat';

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
			<span class="gcm-icon icon-map-pin <?php echo $icon_type; ?>"></span>
			<span class="address-text"><?php echo esc_html( $address ); ?></span>
		</div>
		<?php } ?>
		
		<?php if ( $phone && $display_phone ) { ?>
		<div class="phone" itemprop="telephone">
			<span class="gcm-icon icon-phone <?php echo $icon_type; ?>"></span>
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
				?>
				<div class="hours-item day-<?php echo esc_attr($day); ?> <?php if ( ! $hour_text ) echo 'closed'; ?>">
					<span class="day"><?php echo esc_html($day_text); ?></span>
					<span class="hours"><?php echo esc_html($hour_text ?: __('Closed', 'gcm') ); ?></span>
				</div>
				<?php
			}
		?></div>
		<?php } ?>
		
	</div>
	<?php
	
	$first = false;
}

echo '</div>'; // .location-list