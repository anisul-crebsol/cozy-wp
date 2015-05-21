<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Cozy
 */
global $wt_cozy; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="section-title animate-from-bottom animation-from-bottom" data-animation-direction="from-bottom" data-animation-delay="50">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <?php if ( is_page_template('page-our-partners.php')) {
        the_content();
        echo "<div id='partners'>";
        $page_id = ($wt_cozy['opt_select_partners']);
        $entries = get_post_meta( $page_id, '_wt_partners_repeat_group', true );

        foreach ( (array) $entries as $key => $entry ) {
            $mouseOverImg = $entry['partner_image_hover'];
            $partners_image = $entry['partner_image'];
            if($partners_image) : $partners_image = $partners_image; else : $partners_image = 'http://placehold.it/194x45'; endif;
    ?>

            <div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
                <a href="<?php echo $entry['partner_link']; ?>"><img src="<?php echo $partners_image; ?>" alt='' <?php if($mouseOverImg): echo $mouseOverImage = "onmouseover=\"this.src='$mouseOverImg';\"  onmouseout=\"this.src='$partners_image';\""; endif; ?> ></img></a>
            </div>
        <?php }
        echo "</div>";
    } else { ?>

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'cozy' ),
                'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
    <?php } ?>
    <footer class="entry-footer">
        <?php edit_post_link( __( 'Edit', 'cozy' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
