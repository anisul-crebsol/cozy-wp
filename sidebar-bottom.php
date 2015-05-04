<?php global $wt_cozy; ?>

<!-- Sidebar Home Map -->
<?php if ( is_page_template('page-home-map.php')) { ?>
<div class="sidebar gray col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-home-map-bottom' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-home-map-bottom' ); ?>
	<?php endif; ?>
</div>

<?php }

?>
