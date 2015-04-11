<?php global $wt_cozy; ?>
<?php
	$agency_street = get_post_meta( $post->ID, '_wt_agency_street', true );
	$agency_city = get_post_meta( $post->ID, '_wt_agency_city', true );
	$agency_state = get_post_meta( $post->ID, '_wt_agency_state', true );
	$agency_country = get_post_meta( $post->ID, '_wt_agency_country', true );
	$agency_email = get_post_meta( $post->ID, '_wt_agency_email', true );
	$agency_telephone = get_post_meta( $post->ID, '_wt_agency_telephone', true );
	$agency_gplus = get_post_meta( $post->ID, '_wt_agency_youtube', true );
	$agency_facebook = get_post_meta( $post->ID, '_wt_agency_facebook', true );
	$agency_twitter = get_post_meta( $post->ID, '_wt_agency_twitter', true );
	$agency_youtube = get_post_meta( $post->ID, '_wt_agency_youtube', true );
?>
<div class="agency-detail clearfix">
	<div id="agency_map1" class="map col-md-6"></div>
	
	<div class="info col-md-6">
		<header>
			<h2><?php the_title(); ?> <small><?php echo $agency_city ?></small></h2>
			<ul class="assigned">
				<li>14 Assigned Properties</li>
				<li>4 Agents</li>
			</ul>
		</header>
		
		<ul class="contact-us">
			<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $agency_email ?>"><?php echo $agency_email ?></a></li>
			<li><i class="fa fa-map-marker"></i> <?php echo $agency_street .','.' '. $agency_city.','.' '.  $agency_country ?></li>
			<li><i class="fa fa-phone"></i> <?php echo $agency_telephone ?></li>
		</ul>
		
		<ul class="social-networks">
			<li><a href="<?php echo $agency_gplus ?>"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="<?php echo $agency_facebook ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a href="<?php echo $agency_twitter ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a href="<?php echo $agency_youtube ?>"><i class="fa fa-youtube"></i></a></li>
		</ul>
	</div>
</div>
