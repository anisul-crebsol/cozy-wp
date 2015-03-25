<?php global $wt_cozy; ?>
<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Featured Properties</h1>
				
				<div id="featured-properties-slider" class="owl-carousel fullwidthsingle" data-animation-direction="from-bottom" data-animation-delay="250">
					<?php
					$delay = 250;
					$display_posts = 3;
					$listing_args = array(
						'post_type' => 'listing',
						'tax_query'	=> array(
							array(
								'taxonomy'	=> 'status',
								'field'		=> 'slug',
								'terms'		=> array( 'featured' ),
								'operator'	=> 'NOT IN',
							),
						),
						'showposts' => $display_posts
					);
					query_posts($listing_args);
					if (have_posts()) : while (have_posts()) : the_post();
					
					$listing_status = wp_listings_get_status();
					$listing_price = get_post_meta( $post->ID, '_listing_price', true);
					?>
					<div class="item">
						<div class="image">
							<a href="properties-detail.html"></a>
							<img src="http://placehold.it/760x670" alt="" />
						</div>
						<div class="price">
							<i class="fa fa-home"></i><?php if('' != $listing_status) echo $listing_status; ?>
							<?php if($listing_price) echo "<span>$listing_price</span>"; ?>
						</div>
						<div class="info">
							<h3><a href="properties-detail.html"><?php the_title() ?></a></h3>
							<p><?php the_excerpt() ?></p>
							<a href="properties-detail.html" class="btn btn-default">Read More</a>
						</div>
					</div>
					
					<?php $delay+=50; endwhile; endif; wp_reset_query(); ?>

				</div>
				
			</div>
		</div>
	</div>
</div>