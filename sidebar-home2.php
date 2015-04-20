<?php global $wt_cozy; ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-grid' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-grid' ); ?>
	<?php endif; ?>
</div>