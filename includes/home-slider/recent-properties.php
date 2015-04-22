<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Recent Properties</h1>

<div class="grid-style1 clearfix">

<?php 
    $limit = $wt_cozy['section_grid_number'];
	$args = array(
        'post_type'         => 'property',
        'post_status'       => 'publish',
        'posts_per_page'    => 6,
    );
    $property_query = new WP_Query( $args );?>
<?php while($property_query->have_posts()): $property_query->the_post(); 

	$property_status = get_the_terms($post->ID, 'property-status', true);
	$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
	$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
	$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
	$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
	$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
?>	
	<div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="200">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
				<?php 
					$property_title = get_the_title();
					$title_limit = 22;
					$dots = " ...";
					if(strlen($property_title) <= $title_limit) {
						echo "<h3>" . $property_title . "</h3>";
					} else {
						echo "<h3>" . substr($property_title, 0, $title_limit) . $dots . "</h3>";
					}
				?>
				<?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
			</a>
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
			}
			else {
				echo '<img src="http://placehold.it/220x194" />';
			}
			?>
		</div>
		<div class="price">
			<i class="fa fa-home"></i>
			<?php 
			if ( $property_status && ! is_wp_error( $property_status ) ) : 
			$draught_links = array();
			foreach ( $property_status as $status ) {
				$draught_links[] = $status->name;
			}														
			echo $on_draught = join( ", ", $draught_links );
			endif;
			?>
			<?php if($property_price) echo "<span>$property_price</span>"; ?>
		</div>
		<ul class="amenities">
			<?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo "$property_area"; ?></li><?php } ?>
			<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
			<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
		</ul>
	</div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

	
</div>