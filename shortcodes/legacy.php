<?php

// From the old theme

function displaydate()
{
	return date('m-d-Y', strtotime("+20 days"));
}
add_shortcode('expirydate', 'displaydate');

function displaydate7()
{
	return date('F d, Y', strtotime("+7 days"));
}
add_shortcode('expirydate7', 'displaydate7');

// used on i639 form
// https://greatcitymedical.radgh.com/i693form/?date1=2023-07-19&time=12%3A50%20PM&location=68E
function getaptdate()
{
	$date1 = $_GET['date1'];
	$aptdate = date("m/d/Y", strtotime($date1));
	return $aptdate;
}
add_shortcode('getaptdateval', 'getaptdate');

// used on i639 form
// https://greatcitymedical.radgh.com/i693form/?date1=2023-07-19&time=12%3A50%20PM&location=68E
function appointmentfield()
{
	$datevalue = isset($_GET['date1']) ? sanitize_text_field($_GET['date1']) : '';
	$timevalue = isset($_GET['time']) ? sanitize_text_field($_GET['time']) : '';
	if ($datevalue) {
		$fieldval = 'Your appointment is on ' . $datevalue . ' at ' . $timevalue;
	} else {
		$fieldval = 'Appointment was not selected';
	}
	return $fieldval;
}

add_shortcode('appointmentfieldval', 'appointmentfield');