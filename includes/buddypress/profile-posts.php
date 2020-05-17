<?php

function mt_recent_recipes_tab() {
	bp_core_load_template(
		apply_filters( 'bp_core_template_plugin', 'members/single/plugins' )
	);
}
