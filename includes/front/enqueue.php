<?php

/**
 * Undocumented function
 *
 * @return void
 */
function mytheme_register_scripts() {
	// Variable to hold get_theme_file.uri() .
	$theme_file_dir = get_theme_file_uri();

	// If MT_DEV_MODE is set to true the version will be cached.
	$ver            = MT_DEV_MODE ? time() : false;

	wp_enqueue_style( 'gogle-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', array(), $ver );

	wp_enqueue_style( 'bootstrap-css', $theme_file_dir . '/assets/css/bootstrap.css', array(), $ver );

	wp_enqueue_style( 'dark-css', $theme_file_dir . '/assets/css/dark.css', array(), $ver );

	wp_enqueue_style( 'font-icons-css', $theme_file_dir . '/assets/css/font-icons.css', array(), $ver );

	wp_enqueue_style( 'animate-css', $theme_file_dir . '/assets/css/animate.css', array(), $ver );

	wp_enqueue_style( 'magnigic-popup-css', $theme_file_dir . '/assets/css/magnigic-popup.css', array(), $ver );

	wp_enqueue_style( 'custom-css', $theme_file_dir . '/assets/css/custom.css', array(), $ver );

	wp_enqueue_style( 'reponsive-css', $theme_file_dir . '/assets/css/responsive.css', array(), $ver );

	wp_enqueue_style( 'mytheme-secondary-css', $theme_file_dir . '/assets/css/style.css', array(), $ver );

	wp_enqueue_style(
		'myatheme-main-css', get_stylesheet_uri(), array(
		'gogle-fonts',
		'bootstrap-css',
		'dark-css',
		'font-icons-css',
		'animate-css',
		'magnigic-popup-css',
		'custom-css',
		'reponsive-css',
		'mytheme-secondary-css'
	),
		$ver,
		false
	);
	wp_enqueue_script( 'mytheme-jquery', $theme_file_dir . '/assets/js/jquery.js', array(), time(), true );
	wp_enqueue_script( 'mytheme-plugin-js', $theme_file_dir . '/assets/js/plugins.js', array(), $ver, true );

	wp_enqueue_script( 'mytheme-functions-js', $theme_file_dir . '/assets/js/functions.js', array(), $ver, true );

}