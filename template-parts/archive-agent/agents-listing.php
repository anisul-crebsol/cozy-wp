<div id="agents-results" class="agents-grid">
    <div class="row">
<?php
$count = 0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$agent_args = array(
    'post_type' => 'agent',
    'posts_per_page' => $display_posts,
    'paged' => $paged
);
query_posts($agent_args);
while (have_posts()) : the_post();

    $count++;
    $agent_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_agent_description', true )));
    $agent_address = get_post_meta( get_the_ID(), '_wt_agent_address', true );
    $agent_email = get_post_meta( get_the_ID(), '_wt_agent_email', true );
    $agent_image = get_post_meta( get_the_ID(), '_wt_agent_img', true );
    $agent_country = get_post_meta( get_the_ID(), '_wt_agent_country', true );
    $agent_telephone = get_post_meta( get_the_ID(), '_wt_agent_telephone', true );
    $agent_linkedin_link = get_post_meta( get_the_ID(), '_wt_agent_linkedin_link', true );
    $agent_facebook_link = get_post_meta( get_the_ID(), '_wt_agent_facebook_link', true );
    $agent_twitter_link = get_post_meta( get_the_ID(), '_wt_agent_twitter_link', true );
    $agent_youtube_link = get_post_meta( get_the_ID(), '_wt_agent_youtube_link', true );

    if ( 1 == $count%3 ) { echo '<div class="clearfix"></div>'; }
?>
<div class="item col-md-4"><!-- Set width to 4 columns for grid view mode only -->
    <div class="image">
        <a href="<?php the_permalink(); ?>"><span class="btn btn-default"><i class="fa fa-plus"></i> <?php _e('Details','cozy'); ?></span></a>
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

        <?php
            $description_limit = 100;
            if(strlen($agent_description) <= $description_limit) {
                echo $agent_description;
            } else {
                echo substr($agent_description, 0, $description_limit);
            }
        ?>

        <ul class="contact-us">
            <li><a href="<?php _e('mailto','cozy'); ?>:<?php echo $agent_email ?>"><i class="fa fa-envelope"></i> <?php echo $agent_email ?></a></li>
        </ul>

        <ul class="social-networks">
            <li><a href="<?php echo $agent_linkedin_link; ?>"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="<?php echo $agent_facebook_link; ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $agent_twitter_link; ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $agent_youtube_link ;?>"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
</div>
<?php endwhile; ?>
<?php
  if ( function_exists('wt_cozy_pagination') )
    wt_cozy_pagination();
?>
    </div>
</div>