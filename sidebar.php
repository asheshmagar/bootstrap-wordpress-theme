<!-- Sidebar
				============================================= -->
<div class="sidebar nobottommargin col_last">
	<div class="sidebar-widgets-wrap">
		<?php
		if(is_active_sidebar( 'mt_sidebar' )) {
			dynamic_sidebar( 'mt_sidebar' );
		}
		?>

	</div>

</div><!-- .sidebar end -->
