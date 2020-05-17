<?php
/**
 * mytheme custom nav class
 */
class MT_Custom_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= '<ul class="special-class">';
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= '<li class="special-class-item">';
		$output .= $args->before;
		$output .= '<a href="' . $item->url . '">';
		$output .= $args->link_before . $item->title . $args->link_after;
		$output .= $args->after;
	}


	public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= '</li>';
	}

	/**
	 * @param output
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= '</ul>';
	}
}
