<?php

// ACF functions (plugin: advanced-custom-fields-pro)
if ( ! function_exists( 'get_field' ) ) {
	function get_field( ...$args ) { return false; }
}

// Radley's debugging functions (mu-plugin: rs-debugging.php)
if ( ! function_exists( 'rs_get_ip_address' ) ) {
	function rs_get_ip_address( ...$args ) { return false; }
}

if ( ! function_exists( 'rs_get_developer_ip_addresses' ) ) {
	function rs_get_developer_ip_addresses( ...$args ) { return false; }
}

if ( ! function_exists( 'rs_is_developer' ) ) {
	function rs_is_developer( ...$args ) { return false; }
}

if ( ! function_exists( 'rs_get_backtrace' ) ) {
	function rs_get_backtrace( ...$args ) { return array(); }
}

if ( ! function_exists( 'rs_die' ) ) {
	function rs_die( $message, $data = array(), $title = 'Error' ) { wp_die( $message, $data, $title ); }
}

if ( ! function_exists( 'pre_dump' ) ) {
	function pre_dump( ...$args ) {}
}

if ( ! function_exists( 'pre_dump_die' ) ) {
	function pre_dump_die( ...$args ) {}
}

if ( ! function_exists( 'pre_dump_get' ) ) {
	function pre_dump_get( ...$args ) { return false; }
}

if ( ! function_exists( 'pre_dump_table' ) ) {
	function pre_dump_table( $array ) {}
}

if ( ! function_exists( 'rs_start_timer' ) ) {
	function rs_start_timer( ...$args ) {}
}

if ( ! function_exists( 'rs_stop_timer' ) ) {
	function rs_stop_timer( ...$args ) { return false; }
}