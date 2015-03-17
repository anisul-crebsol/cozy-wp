<?php global $wt_cozy; ?>
		<!-- BEGIN FOOTER -->
		<footer id="footer">
			<div id="footer-top" class="container">
				<div class="row">
					<div class="block col-sm-3">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $wt_cozy['cozy_logo']['url']?>" alt="Cozy Logo" /></a>
						<br><br>
						<p><?php echo $wt_cozy['cozy_description']?></p>
					</div>
					<div class="block col-sm-3">
						<h3><?php echo $wt_cozy['section_contact_title']?></h3>
						<ul class="footer-contacts">
							<li><i class="fa fa-map-marker"></i> 24th Street, New York, USA</li>
							<li><i class="fa fa-phone"></i> <?php echo $wt_cozy['section_contact_phone']?></li>
							<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $wt_cozy['section_contact_email']?>"><?php echo $wt_cozy['section_contact_email']?></a></li>
						</ul>
					</div>
					<div class="block col-sm-3">
						<h3>Helpful Links</h3>
				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'secondery',
				                'theme_location'    => 'secondery',
				                'depth'             => 0,
				                'menu_class'        => 'footer-links',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker()
				                )
				            );
				        ?>
					</div>
					<div class="block col-sm-3">
						<h3>Latest Listings</h3>
						<ul class="footer-listings">
							<?php
							$delay = 250;
							//$display_posts = get_option();
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
								'showposts' => 3 //$display_posts
							);
							query_posts($listing_args);
							if (have_posts()) : while (have_posts()) : the_post();
							
							$listing_status = wp_listings_get_status();
							$listing_price = get_post_meta( $post->ID, '_listing_price', true);
							$listing_address = get_post_meta( $post->ID, '_listing_address', true);
							$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
							$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
							$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );
							?>
							<li>
								<div class="image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
								<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span>+</span></a></p>
							</li>
							<?php $delay+=200; endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
			
			
			<!-- BEGIN COPYRIGHT -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php echo $wt_cozy['footer_copyright']?>
							
							<!-- BEGIN SOCIAL NETWORKS -->
							<ul class="social-networks">
								<li><a href="<?php echo $wt_cozy['footer_facebook_link']?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $wt_cozy['footer_twitter_link']?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $wt_cozy['footer_googleplus_link']?>"><i class="fa fa-google"></i></a></li>
								<li><a href="<?php echo $wt_cozy['footer_pinterest_link']?>"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="<?php echo $wt_cozy['footer_youtube_link']?>"><i class="fa fa-youtube"></i></a></li>
								<li><a href="<?php echo $wt_cozy['footer_feed_link']?>"><i class="fa fa-rss"></i></a></li>
							</ul>
							<!-- END SOCIAL NETWORKS -->
						
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
			
		</footer>
		<!-- END FOOTER -->
	
	</div>
	<!-- END WRAPPER -->

	
	
<?php wp_footer(); ?>


<script type="text/javascript">
		(function($){
			"use strict";
			
			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
<?php require get_template_directory() . '/inc/agencies.php'; ?>
</body>
</html>