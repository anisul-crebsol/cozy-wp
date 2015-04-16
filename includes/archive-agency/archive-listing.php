<ul id="agencies-results" class="agencies-list">
<?php
$display_posts = 3;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$property_args = array(
	'post_type' => 'agency',
	'posts_per_page' => $display_posts,
	'paged' => $paged
);
query_posts($property_args);
if (have_posts()) : while (have_posts()) : the_post();

	$agency_description = get_post_meta( $post->ID, '_wt_agency_description1', true );
	$agency_state = get_post_meta( $post->ID, '_wt_agency_state', true );
	$agency_email = get_post_meta( $post->ID, '_wt_agency_email', true );
?>
	<li class="col-md-6"><!-- Set width to 6 columns for grid view mode only -->
		<div id="agency_map1" class="map"></div>
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
				<li><a href="mailto:<?php echo $agency_email ?>"><i class="fa fa-envelope"></i> <?php echo $agency_email ?></a></li>
			</ul>
			
			<a href="<?php the_permalink(); ?>" class="btn btn-default-color">More Details</a>
		</div>
	</li>
<?php endwhile; endif; ?>
</ul>