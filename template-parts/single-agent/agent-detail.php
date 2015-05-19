<?php global $wt_cozy; ?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); 
 
	$agent_address = get_post_meta( $post->ID, '_wt_agent_address', true );
	$agent_email = get_post_meta( $post->ID, '_wt_agent_email', true );
	$agent_image = get_post_meta( $post->ID, '_wt_agent_img', true );
	$agent_country = get_post_meta( $post->ID, '_wt_agent_country', true );
	$agent_telephone = get_post_meta( $post->ID, '_wt_agent_telephone', true );
	$agent_linkedin_link = get_post_meta( $post->ID, '_wt_agent_linkedin_link', true );
	$agent_facebook_link = get_post_meta( $post->ID, '_wt_agent_facebook_link', true );
	$agent_twitter_link = get_post_meta( $post->ID, '_wt_agent_twitter_link', true );
	$agent_youtube_link = get_post_meta( $post->ID, '_wt_agent_youtube_link', true );
?>
<div class="agent-detail clearfix">
	<div class="image col-md-5">
		<?php
		if ($agent_image) {
			echo '<img alt="" src="'. $agent_image .' " />';
		}
		else {
			echo '<img alt="" src="http://placehold.it/307x307" />';
		}
		?>
	</div>
	
	<div class="info col-md-7">
		<header>
			<h2><?php the_title(); ?> <small><?php echo $agent_address ?></small></h2>
			<ul class="assigned">
				<li>
				<?php  
			    	$args = array(
			            'post_type'         => 'property',
			            'post_status'       => 'publish',
						'meta_key'   		=> '_wt_property_author',
						'meta_value' 		=> $post->ID,
			        );
			        $wp_query = new WP_Query( $args );
					echo $wp_query->found_posts; _e( ' '.'Assigned Properties', 'cozy' ); 
					wp_reset_query(); 
				?>
				</li>
			</ul>
		</header>
		
		<ul class="contact-us">
			<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $agent_email ?>"><?php echo $agent_email ?></a></li>
			<li><i class="fa fa-map-marker"></i> <?php echo $agent_address .','. $agent_country ?></li>
			<li><i class="fa fa-phone"></i> <?php echo $agent_telephone ?></li>
		</ul>
		
		<ul class="social-networks">
			<li><a href="<?php echo $agent_linkedin_link ?>"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="<?php echo $agent_facebook_link ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a href="<?php echo $agent_twitter_link ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a href="<?php echo $agent_youtube_link ?>"><i class="fa fa-youtube"></i></a></li>
		</ul>

	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>