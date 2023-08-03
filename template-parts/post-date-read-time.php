<?php
$date = get_the_time( 'F d, Y' );
$read_time = gcm_get_read_time( get_the_content() );
?>
<div class="post-time">
	<div class="post-date"><?php echo $date; ?></div>
	<div class="read-time"><?php echo $read_time; ?></div>
</div>