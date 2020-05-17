<?php


// Constants.
define( 'MT_DEV_MODE', true );

// Includes files.
require get_theme_file_path( '/includes/front/enqueue.php' );
require get_theme_file_path( '/includes/setup.php' );
require get_theme_file_path( '/includes/custom-nav-walker.php' );
require get_theme_file_path( '/includes/widgets.php' );
require get_theme_file_path( '/includes/theme-customizer.php' );
require get_theme_file_path( '/includes/customizer/misc.php' );
require get_theme_file_path( '/includes/customizer/social.php' );
require get_theme_file_path( '/includes/buddypress/profile-tabs.php' );
require get_theme_file_path( '/includes/utility.php' );
require get_theme_file_path( '/includes/buddypress/profile-posts.php' );

// error_log(print_r(require( get_theme_file_path( '/includes/custom-nav-walker.php' ) )),true);

// Hooks.
add_action( 'wp_enqueue_scripts', 'mytheme_register_scripts' );
add_action( 'after_setup_theme', 'mytheme_setup_theme' );
add_action( 'widgets_init', 'mytheme_widgets' );
add_action( 'customize_register', 'mt_customize_register' );
add_action( 'bp_setup_nav', 'mt_buddypress_profile_tabs' );
