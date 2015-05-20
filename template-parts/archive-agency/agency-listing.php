<ul id="agencies-results" class="agencies-list">
<?php
$sorted_by = '';
$sort_by_agency = '';
if(isset($_GET['sorted_by'])){ $sorted_by = esc_attr($_GET['sorted_by']); } 
if(isset($_GET['sort_by_agency'])){ $sort_by_agency = esc_attr($_GET['sort_by_agency']); }
$count = 1;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$agency_args = array(
	'post_type' => 'agency',
	'paged' => $paged,
	'posts_per_page' => 3,
);
$agency_args2 = array(
	'post_type' => 'agency',
	'paged' => $paged,
	'posts_per_page' => 3,
	'tax_query' => array(
		'relation' => 'OR',
		array(
			'meta_key' => '_wt_agency_city',
			),
		array(
			'meta_key' => '_wt_agency_state',
			),
	),
	'meta_value' => $sort_by_agency,
);

$order = $agency_args;
if($sort_by_agency == "$sort_by_agency") { $order = $agency_args2; }

	$wp_query = new WP_Query( $order );
	while($wp_query->have_posts()): $wp_query->the_post();

	$agency_description = do_shortcode(wpautop(get_post_meta( $post->ID, '_wt_agency_description1', true )));
	$agency_state = get_post_meta( $post->ID, '_wt_agency_state', true );
	$agency_email = get_post_meta( $post->ID, '_wt_agency_email', true );

	if ( 0 == $count%3 ) { echo '<div class="clearfix"></div>'; }
?>
	<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
		<div id="agency_map<?php echo $count; ?>" class="map"></div>
		<div class="info">
			<h2><?php the_title(); ?> <small><?php echo $agency_state ?></small></h2>
			
			<p>
			<?php 
				$description_limit = 190;
				if(strlen($agency_description) <= $description_limit) {
					echo $agency_description;
				} else {
					echo substr($agency_description, 0, $description_limit);
				}
			?>	
			</p>
			
			<ul class="contact-us">
				<li><a href="<?php _e('mailto', 'cozy'); ?>:<?php echo $agency_email ?>"><i class="fa fa-envelope"></i> <?php echo $agency_email ?></a></li>
			</ul>
			
			<a href="<?php the_permalink(); ?>" class="btn btn-default-color"><?php _e('More Details', 'cozy'); ?></a>
		</div>
	</li>
<?php $count++; endwhile; ?>
<?php
  if ( function_exists('wt_cozy_pagination') )
    wt_cozy_pagination();
?>
<?php wp_reset_query(); ?>
</ul>