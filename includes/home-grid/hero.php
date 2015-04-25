<?php global $wt_cozy; ?>
		<div class="home3-hero">
			<div class="container">
				<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-7">
						<h2 data-animation-direction="from-left" data-animation-delay="100"><?php echo $text = get_post_meta( $post->ID, '_wt_grid_title', true ); ?></h2>
						<p data-animation-direction="from-left" data-animation-delay="300"><?php echo $text = get_post_meta( $post->ID, '_wt_grid_description', true ); ?></p>
						<a href="<?php echo get_post_type_archive_link('agent'); ?>" class="btn btn-default-color" data-animation-direction="from-left" data-animation-delay="500">Find an Agent</a>
					</div>
					
					<div class="col-sm-5" data-animation-direction="from-right" data-animation-delay="150">
						<div class="mapborder">
							<div id="map_agency" class="gmap"></div>
						</div>
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>