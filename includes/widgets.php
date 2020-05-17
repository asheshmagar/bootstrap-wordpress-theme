<?

/**
 * Widget  function
 *
 * @return void
 */
function mytheme_widgets () {
	register_sidebar(array(
		'name' => __('My Theme Sidebar' , 'mytheme'),
		'id' => 'mt_sidebar',
		'description' => __('Sidebar for the theme mytheme' , 'mytheme'),
		'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}