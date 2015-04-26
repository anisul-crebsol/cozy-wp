<?php global $wt_cozy; ?>

<!-- Sidebar Home Search -->
<?php if ( is_page_template('page-search.php')) { ?>
<div class="sidebar colored col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-search' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-search' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Grid
elseif ( is_page_template('page-grid.php')) { ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-grid' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-grid' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Slider
elseif ( is_page_template('page-slider.php')) { ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-slider' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-slider' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Map
elseif ( is_page_template('page-map.php')) { ?>
	<?php if ( is_active_sidebar( 'sidebar-home-map-top' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-map-top' ); ?>
	<?php endif; ?>
<?php }

// Sidebar for Single Post 
elseif ( is_single() || is_archive() ){ ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
	<?php endif; ?>
</div>

<?php }

// Sidebar for Property Archive
elseif ( is_post_type_archive('property')) { ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-single-property' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-single-property' ); ?>
	<?php endif; ?>
</div>

<?php } 

// Sidebar for all single post and archive pages of custom post types ( Single Property, Agent, Agency, Features, Testimonials, Faq and Price )
elseif ( is_singular('agent') || is_singular('agency') || is_singular('property') || is_singular('feature') || is_singular('testimonial') || is_singular('faq') || is_singular('price-table') || is_post_type_archive('agent') || is_post_type_archive('agency')){ ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-custom-post' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-custom-post' ); ?>
	<?php endif; ?>
</div>

<?php } ?>
