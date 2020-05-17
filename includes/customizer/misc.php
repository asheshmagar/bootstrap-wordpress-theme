<?php

function mt_misc_customizer_section( $wp_customize ) {
	$wp_customize->add_setting( 'mt_header_show_search', array(
		'default' => 'yes'
	) );
	$wp_customize->add_setting( 'mt_header_show_cart', array(
		'default' => 'yes'
	) );
	$wp_customize->add_setting( 'mt_footer_copyright_text', array(
		'default' => 'Copyrights &copy; 2020 All Rights Reserved.'
	) );

	$wp_customize->add_setting( 'mt_footer_tos_page', array(
		'default' => 0
	) );

	$wp_customize->add_setting( 'mt_footer_privacy_page', array(
		'default' => 0
	) );

	$wp_customize->add_section( 'mt_misc_section', array(
		'title'    => __( 'My Theme Miscellaneous Settings', 'mytheme' ),
		'priority' => 30
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_header_show_search_input',
		array(
			'label'    => __( 'Show Search Button in Header', 'mytheme' ),
			'section'  => 'mt_misc_section',
			'settings' => 'mt_header_show_search',
			'type'     => 'checkbox',
			'choices'  => array(
				'yes' => 'Yes'
			)
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_header_cart_input',
		array(
			'label'    => __( 'Show Cart Button in Header', 'mytheme' ),
			'section'  => 'mt_misc_section',
			'settings' => 'mt_header_show_cart',
			'type'     => 'checkbox',
			'choices'  => array(
				'yes' => 'Yes'
			)
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_footer_copyright_text_input',
		array(
			'label'    => __( 'Change Footer Text', 'mytheme' ),
			'section'  => 'mt_misc_section',
			'settings' => 'mt_footer_copyright_text',
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_footer_tos_page_input',
		array(
			'label'    => __( 'Footer TOS Page', 'mytheme' ),
			'section'  => 'mt_misc_section',
			'settings' => 'mt_footer_tos_page',
			'type'     => 'dropdown-pages'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_footer_privacy_page_input',
		array(
			'label'    => __( 'Footer Privacy Policy Page', 'mytheme' ),
			'section'  => 'mt_misc_section',
			'settings' => 'mt_footer_privacy_page',
			'type'     => 'dropdown-pages'
		)
	) );

}