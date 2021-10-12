<?php
/**
 * Functions
 *
 * @package udDiviChild
 */

/**
 * CSS
 *
 * @return void
 */
function ud_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	/** Custom CSS */
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', '', '1.0.0', 'all' );

	/** Custom JS */
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ud_enqueue_styles' );
