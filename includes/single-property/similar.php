<h1 class="section-title">Similar Properties</h1>
<div id="similar-properties" class="grid-style1 clearfix">
	<div class="row">

	    <?php 
	        $limit = 6;
	    	$args = array(
	            'post_type'         => 'property',
	            'post_status'       => 'publish',
	            'posts_per_page'    => $limit,
	            'post__not_in' 		=> array($post->ID)
	        );
	        $property_query = new WP_Query( $args );
	        ?>
	    <?php while($property_query->have_posts()): $property_query->the_post();

			$property_address = get_post_meta( $post->ID, '_wt_property_address', true ); 
	 		$property_price = get_post_meta( $post->ID, '_wt_property_price', true );
			$square_feet = get_post_meta( $post->ID, '_wt_property_area', true );
			$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
			$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
	    ?>

		<div class="item col-md-4">
			<div class="image">
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title() ?></h3>
					<?php if ($property_price !='') { ?><span class="location"><?php echo $property_address; ?></span><?php } ?>
				</a>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
				}
				else {
					echo '<img src="http://placehold.it/760x670" />';
				}
				?>
			</div>
			<div class="price">
				<i class="fa fa-home"></i>
					<?php $terms = wp_get_post_terms($post->ID, 'property-status', array("fields" => "names"));
						$i=0;
						foreach($terms as $term):
							if (count($terms) - $i < 2):
								echo $term;
							else :
								echo $term.','.' ';
							endif;
							$i++;
						 endforeach;
					 ?>
				<?php if ($property_price !='') { ?><span><?php echo $property_price; ?></span><?php } ?>
			</div>
			<ul class="amenities">
				<?php if ($square_feet !='') { ?><li><i class="icon-area"></i>
					<?php echo $square_feet; ?>
				</li><?php } ?>
				<?php if ($property_bedrooms !='') { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
				<?php if ($property_bathrooms !='') { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
			</ul>
		</div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
		

		<!-- Item hidden (class="disabled") -->
		<div class="item col-md-4 disabled">
			<div class="image">
				<a href="properties-detail.html">
					<h3>Recent construction with 3 bedrooms.</h3>
					<span class="location">Manhattan, New York</span>
				</a>
				<img src="http://placehold.it/760x670" alt="" />
			</div>
			<div class="price">
				<i class="fa fa-home"></i>For Sale
				<span>$120,000</span>
			</div>
			<ul class="amenities">
				<li><i class="icon-area"></i> 3250 Sq Ft</li>
				<li><i class="icon-bedrooms"></i> 3</li>
				<li><i class="icon-bathrooms"></i> 2</li>
			</ul>
		</div>
		
	</div>
</div>

<p class="center">
	<a href="#" class="btn btn-default-color" data-grid-id="similar-properties" data-load-amount="3">Load More Properties</a>
</p>