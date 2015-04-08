<?php global $wt_cozy; ?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); 
 
	$agent_address = get_post_meta( $post->ID, '_wt_agent_address', true );
	$agent_email = get_post_meta( $post->ID, '_wt_agent_email', true );
	$agent_image = get_post_meta( $post->ID, '_wt_agent_img', true );
	$agent_country = get_post_meta( $post->ID, '_wt_agent_country', true );
	$agent_telephone = get_post_meta( $post->ID, '_wt_agent_telephone', true );
?>
<div class="agent-detail clearfix">
	<div class="image col-md-5">
		<?php
		if ($agent_image) {
			echo '<img alt="" src="'. $agent_image .' " />';
		}
		else {
			echo '<img alt="" src="http://placehold.it/308x307" />';
		}
		?>
	</div>
	
	<div class="info col-md-7">
		<header>
			<h2><?php the_title(); ?> <small><?php echo $agent_address ?></small></h2>
			<ul class="assigned">
				<li>14 Assigned Properties</li>
			</ul>
		</header>
		
		<ul class="contact-us">
			<li><i class="fa fa-envelope"></i><a href="mailto:john.doe@yourdomain.com"><?php echo $agent_email ?></a></li>
			<li><i class="fa fa-map-marker"></i> <?php echo $agent_address .','. $agent_country ?></li>
			<li><i class="fa fa-phone"></i> 800-123-4567</li>
		</ul>
		
		<ul class="social-networks">
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		</ul>

	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>