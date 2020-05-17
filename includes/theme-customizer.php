<?php

/**
 * register customizer function
 *
 * @param [type] $wp_customize
 * @return void
 */
function mt_customize_register( $wp_customize ) {
	mt_social_customize_section( $wp_customize );
	mt_misc_customizer_section( $wp_customize );

}