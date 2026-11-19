<?php
/**
 * MT Senda theme functions.
 *
 * @package MTSenda
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the theme stylesheet.
 *
 * @return void
 */
function mtdev_senda_enqueue_styles() {
	wp_enqueue_style(
		'mt-senda-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'mtdev_senda_enqueue_styles' );
