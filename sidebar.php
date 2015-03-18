<?php global $wt_cozy; ?>
<div class="sidebar colored col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
	<?php endif; ?>
</div>