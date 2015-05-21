<div class="grid-style1 clearfix">
    <div class="row">
<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_status'       => 'publish',
        'paged' => $paged,
    );
    $wp_query = new WP_Query( $args );
    while($wp_query->have_posts()): $wp_query->the_post();
?>

    <div class="item col-md-12"><!-- Set width to 4 columns for grid view mode only -->
        <div class="image image-large">
            <a href="<?php the_permalink(); ?>">
                <span class="btn btn-default"><i class="fa fa-file-o"></i> <?php _e( 'Read More', 'cozy' );?></span>
            </a>
            <?php echo wt_cozy_thumbnail('720x284'); ?>
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
<?php
  if ( function_exists('wt_cozy_pagination') )
    wt_cozy_pagination();
?>
<?php wp_reset_query(); ?>
    </div>
</div>