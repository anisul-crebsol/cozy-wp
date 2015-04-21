<?php global $wt_cozy; ?>
		<!-- BEGIN FOOTER -->
		<footer id="footer">
			<div id="footer-top" class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-footer' ); ?>
					<?php endif; ?>
				</div>
			</div>
			
			
			<!-- BEGIN COPYRIGHT -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php echo $wt_cozy['footer_copyright']; ?>
							
							<!-- BEGIN SOCIAL NETWORKS -->
								<?php 
								$footer_facebook = $wt_cozy['footer_facebook_link'];
								$footer_twitter = $wt_cozy['footer_twitter_link'];
								$footer_googleplus = $wt_cozy['footer_googleplus_link'];
								$footer_pinterest = $wt_cozy['footer_pinterest_link'];
								$footer_youtube = $wt_cozy['footer_youtube_link'];
								$footer_feed = $wt_cozy['footer_feed_link'];
								?>
							<ul class="social-networks">
								<li><a href="<?php echo $footer_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $footer_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $footer_googleplus; ?>"><i class="fa fa-google"></i></a></li>
								<li><a href="<?php echo $footer_pinterest; ?>"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="<?php echo $footer_youtube; ?>"><i class="fa fa-youtube"></i></a></li>
								<li><a href="<?php echo $footer_feed; ?>"><i class="fa fa-rss"></i></a></li>
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
<?php get_template_part ('/includes/footer-scripts'); ?>
</body>
</html>