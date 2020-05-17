<?php
/**
 * after theme setup function
 *
 * @return void
 */
function mytheme_setup_theme() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'starter-content',
		array(
			'widgets'     => array(
				'mt_sidebar' => array(
					'search',
					'calender',
				),
			),
			'attachments' => array(
				'image-about' => array(
					'post-title' => __( 'About', 'mytheme' ),
					'file'       => 'assets/images/about/1.jpg',
				),
			),
			'posts'       => array(
				'home'             => array(
					'thumbnail' => '{{image-about}}',
				),
				'about'            => array(
					'thumbnail' => '{{image-about}}',
				),
				'contact'          => array(
					'thumbnail' => '{{image-about}}',
				),
				'blog'             => array(
					'thumbnail' => '{{image-about}}',
				),
				'homepage-section' => array(
					'thumbnail' => '{{image-about}}',
				),
			),
			'options'     => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),
			'theme_mods'  => array(),
			'nav_menus'   => array(),
		)
	);
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'mytheme' ) );
	register_nav_menu( 'secondary', __( 'Secondary Menu', 'mytheme' ) );
}
