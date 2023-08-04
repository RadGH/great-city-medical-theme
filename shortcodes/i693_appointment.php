<?php

function shortcode_i693_appointment( $atts, $content = '', $shortcode_name = 'i693_appointment' ) {
	$date = $_GET['date1'] ?? false;
	$time = $_GET['time'] ?? false;
	$location = $_GET['location'] ?? false;
	
	if ( !$date && !$time && !$location ) return '';
	
	$address = '';
	
	if ( $location == '1513V' ) $address = '1513 Voorhies Ave 3rd Floor, Brooklyn, NY 11235';
	if ( $location == '68E' ) $address = '68e 131st Street Suite 100, New York, NY 10037';
	
	ob_start();
	?>

	<div class="i693-appointment-card">
	
		<div class="wp-block-group container-style-card-x-small has-lightest-blue-background-color has-background is-layout-constrained">
			<div class="wp-block-group gap-16 is-nowrap is-layout-flex wp-container-3">
				
				<?php
				echo gcm_get_icon_html( 'patient', 'blue', 'circle', 'medium' );
				?>
				
				<div class="i693-content has-blue-color has-text-color">
					Your appointment is on <strong><?php echo esc_html($date); ?></strong> at <?php echo esc_html($time); ?>, <br>
					<strong>Location:</strong> <?php echo esc_html($address); ?>
				</div>
				
			</div>
		</div>
	
	</div>
	
	<?php
	return ob_get_clean();
}
add_shortcode( 'i693_appointment', 'shortcode_i693_appointment' );