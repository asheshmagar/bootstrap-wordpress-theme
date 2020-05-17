<?php

function mt_buddypress_profile_tabs() {
    if( !mt_plugin_activated_check('recipe/index.php') ) {
        return;
    }
	global $bp;

	bp_core_new_nav_item(
		array(
			'name'                    => esc_html__( 'Recipes', 'mytheme' ),
			'slug'                    => 'recipes',
			'position'                => 100,
			'screen_function'         => 'mt_recent_recipes_tab',
			'show_for_displayed_user' => true,
			'item_css_id'             => 'mt_user_recipes',
			'defaulr_subnav_slug'     => 'recipes',
		)
	);

}
