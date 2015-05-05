<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_newsletter_display']) : ?>
<div class="action-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3><?php echo $wt_cozy['section_newsletter_title2']?> <strong><?php echo $wt_cozy['section_newsletter_title']?></strong></h3>
				<p><?php echo $wt_cozy['section_newsletter_description']?></p>
			</div>
			<div class="col-md-4">
            <div id="newsletter" class="col-sm-12">
                <div class="newsletter newsletter-subscription">
                    <form method="post" action="<?php echo plugin_dir_url('') .'newsletter/do/subscribe.php' ?>" onsubmit="return newsletter_check(this)">
                        <div class="input-group">
                            <input class="newsletter-email form-control" type="email" placeholder="<?php _e( 'Enter your E-mail', 'cozy' );?>" name="ne" size="30" required>
                            <span class="input-group-btn newsletter-td-submit">
                            <input class="newsletter-submit btn btn-default" type="submit" value="<?php echo 'subscribe'; ?>"/>
                            </span>
                        </div>  
                    </form>
                </div>
            </div>
			</div>
			<div class="col-md-4">
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
<?php endif; ?>