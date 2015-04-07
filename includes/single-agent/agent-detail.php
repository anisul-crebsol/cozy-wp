<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="agent-detail clearfix">
	<div class="image col-md-5">
		<img src="http://placehold.it/307x307" alt="" />
	</div>
	
	<div class="info col-md-7">
		<header>
			<h2>John Doe <small>Manhattan, New York</small></h2>
			<ul class="assigned">
				<li>14 Assigned Properties</li>
			</ul>
		</header>
		
		<ul class="contact-us">
			<li><i class="fa fa-envelope"></i><a href="mailto:john.doe@yourdomain.com">john.doe@yourdomain.com</a></li>
			<li><i class="fa fa-map-marker"></i> 24th Street, New York, USA</li>
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