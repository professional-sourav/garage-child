<?php

/**
 *
 * CHILD STYLE FILES ENQUEUE
 *
 */

function child_theme_enqueue_styles() {

	wp_enqueue_style( 'main-child-css', get_stylesheet_directory_uri() . '/assets/dist/css/main-child.min.css' );
	wp_enqueue_style( 'child-style-css', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 99 );

/**
 *
 * ACF MENU REMOVAL FROM WP-ADMIN
 *
 */
add_filter('acf/settings/show_admin', '__return_false');