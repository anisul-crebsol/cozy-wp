<div id="blog-listing" class="grid-style1 clearfix">
	<div class="row">
<?php 
    $count = 0;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
        'post_status'       => 'publish',
        'paged' => $paged,
    );
    $wp_query = new WP_Query( $args );?>
<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>

<?php $clearFix = @( $count%3 == 0 ?  '<div class="clearfix"></div>' : ''); echo $clearFix;  ?>

		<div class="item col-md-4"><!-- Set width to 4 columns for grid view mode only -->
			<div class="image">
				<a href="<?php the_permalink(); ?>">
					<span class="btn btn-default"><i class="fa fa-file-o"></i> <?php _e( 'Read More', 'cozy' );?></span>
				</a>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
				}
				else {
					echo '<img src="http://placehold.it/230x155" />';
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
<?php $count++; endwhile; ?>


	</div>
</div>