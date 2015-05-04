<?php global $wt_cozy; ?>

<!-- Sidebar Home Search -->
<?php if ( is_page_template('page-home-search.php')) { ?>
<div class="sidebar colored col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-search' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-search' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Grid
elseif ( is_page_template('page-home-grid.php')) { ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-grid' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-grid' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Slider
elseif ( is_page_template('page-home-slider.php')) { ?>
<div class="sidebar col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-slider' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-slider' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar Home Map
elseif ( is_page_template('page-home-map.php')) { ?>
<div class="sidebar gray col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-map-top' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-map-top' ); ?>
	<?php endif; ?>
</div>
<?php }

// Sidebar for all single post and archive pages of custom post types ( Single Property, Agent, Agency, Features, Testimonials, Faq and Price )
elseif ( is_singular (array( 'property', 'agency', 'agent', 'feature', 'testimonial', 'faq', 'price-table' )) || is_post_type_archive (array('property', 'agency', 'agent', 'feature', 'testimonial', 'faq', 'price-table')) || is_page_template (array('archive-agency.php', 'archive-agent.php', 'archive-property.php', 'properties-list.php', 'properties-grid.php', ) ) ) { ?>
<div class="sidebar gray col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-custom-post' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-custom-post' ); ?>
	<?php endif; ?>
</div>

<?php }

// Sidebar for Single Post 
elseif ( is_page_template (array('blog-listing1.php', 'blog-listing2.php', 'blog-listing3.php', 'blog-listing4.php' ) ) ||is_single() || is_archive() ){ ?>
<div class="sidebar gray col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
	<?php endif; ?>
</div>

<?php }

?>
