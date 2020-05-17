<?php

/**
 * Undocumented function
 *
 * @param [type] $wp_customize
 * @return void
 */
function mt_social_customize_section ($wp_customize) {
	$wp_customize->add_setting( 'mt_facebook_handle', array(
		'default' => ''
	) );
	$wp_customize->add_setting( 'mt_twitter_handle', array(
		'default' => ''
	) );
	$wp_customize->add_setting( 'mt_instagram_handle', array(
		'default' => ''
	) );
	$wp_customize->add_setting( 'mt_phone_handle', array(
		'default' => ''
	) );
	$wp_customize->add_setting( 'mt_phone_handle', array(
		'default' => ''
	) );
	$wp_customize->add_setting( 'mt_mail_handle', array(
		'default' => ''
	) );

	$wp_customize->add_section( 'mt_social_section', array(
		'title'    => __( 'My Theme Social Setting', 'mytheme' ),
		'priority' => 30
	) );
	$wp_customize->add_section( 'mt_contact_section', array(
		'title'    => __( 'My Theme Contact Setting', 'mytheme' ),
		'priority' => 40
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_social_facebook_input',
		array(
			'label'    => __( 'Facebook Handle', 'mytheme' ),
			'section'  => 'mt_social_section',
			'settings' => 'mt_facebook_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_social_twitter_input',
		array(
			'label'    => __( 'Twitter Handle', 'mytheme' ),
			'section'  => 'mt_social_section',
			'settings' => 'mt_twitter_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_social_instagram_input',
		array(
			'label'    => __( 'Instagram Handle', 'mytheme' ),
			'section'  => 'mt_social_section',
			'settings' => 'mt_instagram_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_contact_phone_input',
		array(
			'label'    => __( 'Phone Handle', 'mytheme' ),
			'section'  => 'mt_contact_section',
			'settings' => 'mt_phone_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_contact_phone_input',
		array(
			'label'    => __( 'Phone Handle', 'mytheme' ),
			'section'  => 'mt_contact_section',
			'settings' => 'mt_phone_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_contact_mail_input',
		array(
			'label'    => __( 'Email Handle', 'mytheme' ),
			'section'  => 'mt_contact_section',
			'settings' => 'mt_mail_handle'
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'mt_footer_facebook_input',
		array(
			'label'    => __( 'Footer Facebook Handle', 'mytheme' ),
			'section'  => 'mt_footer_facebook_section',
			'settings' => 'mt_footer_facebook_handle'
		)
	) );
}
