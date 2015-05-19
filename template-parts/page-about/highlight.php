<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-6">
				<div class="center">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
					
				</div>
			</div>
			
			<div class="col-sm-6">
				<img id="about-img" src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_large' ); echo $url = $thumb['0']; ?>" alt="" data-animation-direction="from-right" data-animation-delay="200" />
			</div>
		</div>
	</div>
</div>