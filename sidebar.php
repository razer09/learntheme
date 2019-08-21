<!-- Sidebar
            ============================================= -->
<div class="sidebar nobottommargin col_last clearfix">
	<div class="sidebar-widgets-wrap">
		<?php

		if( is_active_sidebar( 'ex_sidebar' ) ){
			dynamic_sidebar('ex_sidebar' );
		}

		?>
	</div>
</div><!-- .sidebar end -->