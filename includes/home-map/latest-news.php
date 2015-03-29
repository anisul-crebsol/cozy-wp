<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>
<div id="latest-news-slider" class="owl-carousel latest-news-slider" data-animation-direction="from-bottom" data-animation-delay="250">
<?php 
    $limit = $wt_cozy['section_news_number'];
	$args = array(
        'post_status'       => 'publish',
        'posts_per_page'    => $limit,
    );
    $blog_query = new WP_Query( $args );?>
<?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
	<div class="item">
		<div class="image">
			<a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
			<?php
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail($post->ID, array( 760, 670 ));
			}
			else {
				echo '<img src="http://placehold.it/760x670" />';
			}
			?>
		</div>
		
		<div class="tag"><i class="fa fa-file-text"></i></div>
		
		<div class="info">
			<ul class="top-info">
				<li><i class="fa fa-calendar"></i> <?php echo $date = mysql2date('F j, Y', $post->post_date);?></li>
				<li><i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '% responses' ); ?></li>
				<li><i class="fa fa-tags"></i> 
				<?php $posttags = get_the_tags(); 
				if ($posttags) {											
					foreach($posttags as $tag) {
						$tabname[] = $tag->name; 
					}
					echo implode(', ', $tabname);
				}?>
				</li>
			</ul>
				
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>