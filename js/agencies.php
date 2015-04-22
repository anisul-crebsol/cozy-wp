<?php
$property_args = array(
	'post_type' => 'agency',
	'posts_per_page' => $display_posts,
);
query_posts($property_args);
if (have_posts()) : while (have_posts()) : the_post();

	$agency_latitude = get_post_meta( $post->ID, '_wt_agency_latitude', true );
	$agency_longitude = get_post_meta( $post->ID, '_wt_agency_longitude', true );
?>
	<script type="text/javascript">
		var agencies = [
			{
				"id": 0,
				"title": "<?php the_title(); ?>",
				"latitude":<?php echo $agency_latitude; ?>,
				"longitude":<?php echo $agency_longitude; ?>,
				"image":"
					<?php
					if ($agent_image) {
						echo '<img alt="" src="'. $agent_image .' " />';
					}
					else {
						echo '<img alt="" src=\"http://placehold.it/307x307\" />';
					}
					?>",
				"description":"<?php echo $agency_address; ?> <br> Phone: <?php echo $agency_phone; ?>",
				"link":"<?php the_permalink(); ?>",
				"map_marker_icon":"<?php echo $agency_map_marker_icon; ?>"
			},
	</script>
<?php endwhile; ?>
<?php endif; ?>