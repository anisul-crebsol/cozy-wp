<?php
/**
 * @package Cozy
 */
global $wt_cozy; ?>

<div class="main col-sm-8">

<?php while ( have_posts() ) : the_post(); ?>

    <h1 class="blog-title"><?php the_title(); ?></h1>

    <div class="blog-main-image">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('blog-detail', array('class' => 'img-responsive'));
        }
        else {
            echo '<img src="http://placehold.it/764x423" alt="placeholder"/>';
        }
        ?>
        <div class="tag"><i class="fa <?php if (has_post_format( 'video' )) { echo 'fa-film'; } else {echo 'fa-file-text';} ?>"></i></div>
    </div>

    <div class="blog-bottom-info">
        <ul>
            <li><i class="fa fa-calendar"></i> <?php echo $date = mysql2date('F j, Y', $post->post_date);?></li>
            <li><i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '% responses' ); ?> Comments</li>
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

        <div id="post-author"><i class="fa fa-pencil"></i> <?php _e('By','cozy'); ?> <?php echo $author = get_the_author(); ?></div>
    </div>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <div class="share-wraper col-sm-12 clearfix">
        <h5><?php _e('Share this Post','cozy'); ?>:</h5>
        <ul class="social-networks">
            <li><a target="_blank" href="http://www.facebook.com/sharer.php?s=<?php echo get_the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://plus.google.com/share?url=#<?php echo get_the_permalink(); ?>"><i class="fa fa-google"></i></a></li>
            <li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_post_thumbnail(); ?>"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="mailto:<?php echo $user_email = get_the_author_meta( 'user_email' ); ?>"><i class="fa fa-envelope"></i></a></li>
        </ul>

        <a class="print-button" href="javascript:window.print();">
            <i class="fa fa-print"></i>
        </a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
                // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
            echo "<h1 class='section-title'>Comments</h1>";
            echo "<div class='comments'>";
            comments_template();
            echo "</div>";
            endif;
            ?>
        </div>
    </div>

<?php endwhile; // end of the loop. ?>
</div>