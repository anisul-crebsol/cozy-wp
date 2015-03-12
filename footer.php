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
							<li>
								<div class="image">
									<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
								</div>
								<p><a href="properties-detail.html">Luxury Apartment with great views<span>+</span></a></p>
							</li>
							<li>
								<div class="image">
									<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
								</div>
								<p><a href="properties-detail.html">Stunning Villa with 5 bedrooms<span>+</span></a></p>
							</li>
							<li>
								<div class="image">
									<a href="properties-detail.html"><img src="http://placehold.it/760x670" alt="" /></a>
								</div>
								<p><a href="properties-detail.html">Recent construction with 3 bedrooms.<span>+</span></a></p>
							</li>
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

	
	<script type="text/javascript">
		(function($){
			"use strict";
			
			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
<?php wp_footer(); ?>
</body>
</html>