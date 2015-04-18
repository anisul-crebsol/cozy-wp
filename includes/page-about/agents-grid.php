<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agents</h1>
<ul class="agents-grid">
<?php
$display_posts = 4;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$property_args = array(
	'post_type' => 'agent',
	'posts_per_page' => $display_posts,
	'paged' => $paged
);
query_posts($property_args);
if (have_posts()) : while (have_posts()) : the_post();

	$count++;
	$agent_description = get_post_meta( $post->ID, '_wt_agent_description', true );
	$agent_email = get_post_meta( $post->ID, '_wt_agent_email', true );
	$agent_image = get_post_meta( $post->ID, '_wt_agent_img', true );
	$agent_linkedin_link = get_post_meta( $post->ID, '_wt_agent_linkedin_link', true );
	$agent_facebook_link = get_post_meta( $post->ID, '_wt_agent_facebook_link', true );
	$agent_twitter_link = get_post_meta( $post->ID, '_wt_agent_twitter_link', true );
	$agent_youtube_link = get_post_meta( $post->ID, '_wt_agent_youtube_link', true );

if ( 1 == $count%4 ) {
        echo '<div class="clearfix"></div>';
    }
?>
	<li class="col-sm-3" data-animation-direction="from-bottom" data-animation-delay="250">
		<div class="image">
			<a href="<?php the_permalink(); ?>"><span class="btn btn-default"><i class="fa fa-comment-o"></i> Contact</span></a>
			<?php
			if ($agent_image) {
				echo '<img alt="" src="'. $agent_image .' " />';
			}
			else {
				echo '<img alt="" src="http://placehold.it/307x307" />';
			}
			?>
		</div>
		<div class="info">
			<h2><?php the_title(); ?> <small><?php echo $agent_address; ?></small></h2>
			
			<p>
			<?php 
				$description_limit = 190;
				if(strlen($agent_description) <= $description_limit) {
					echo $agent_description;
				} else {
					echo substr($agent_description, 0, $description_limit);
				}
			?>	
			</p>
			
			<ul class="social-networks">
			<li><a href="<?php echo $agent_linkedin_link ?>"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="<?php echo $agent_facebook_link ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a href="<?php echo $agent_twitter_link ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a href="<?php echo $agent_youtube_link ?>"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>