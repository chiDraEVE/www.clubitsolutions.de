<?php
/**
 * Twentytwentyone-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twentytwentyone-child
 */

add_action( 'wp_enqueue_scripts', 'twentytwentyone_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwentyone_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentyone-style', get_template_directory_uri() . '/style.css' );
	
	if (strstr($_SERVER['SERVER_NAME'], 'clubitsolutions.local')) {
		wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
//		wp_enqueue_style( 'twentytwentyone-child-style',
//			get_stylesheet_directory_uri() . '/style.css',
//			array( 'twentytwentyone-style' )
//		);
	} else {
		wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
		wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.d2f1fdebd8212447159f.js'), NULL, '1.0', true);
		wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.d2f1fdebd8212447159f.css'),
			array( 'twentytwentyone-style' ));
	}
}
