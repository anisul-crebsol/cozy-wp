<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_news_title']?></h1>
<div class="grid-style1">
<?php 
    $limit = $wt_cozy['section_news_number'];
	$args = array(
        'post_status'       => 'publish',
        'posts_per_page'    => $limit,
    );
    $blog_query = new WP_Query( $args );?>
<?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
	<div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="250">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
				<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
			</a>
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
			}
			else {
				echo '<img src="http://placehold.it/760x670" />';
			}
			?>
		</div>
		<div class="tag"><i class="fa fa-file-text"></i></div>
		<div class="info-blog">
			<ul class="top-info">
				<li><i class="fa fa-calendar"></i> <?php echo $date = mysql2date('F j, Y', $post->post_date);?></li>
				<li><i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '% responses' ); ?></li>
				<li><i class="fa fa-tags"></i> 
				<?php $posttags = get_the_tags(); 					
					if ($posttags) {
					$i=0;										
					foreach($posttags as $tag) {
						$tabname = $tag->name; 
						if (count($posttags) - $i < 2){
							echo $tabname;
						} else {
							echo $tabname.','.' ';
						}
						$i++;							
					}						
				}?>
				</li>
			</ul>
			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<?php the_excerpt(); ?>
		</div>
	</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>

<div class="center"><a href="blog-listing1.html" class="btn btn-default-color" data-animation-direction="from-bottom" data-animation-delay="850">View All News</a></div>