<?php global $wt_cozy; ?>
<div class="home3-hero">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

            $grid_title = get_post_meta( get_the_ID(), '_wt_grid_title', true );
            $grid_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_grid_description', true )));
            $agents_link = get_post_type_archive_link('agent');
        ?>
            <div class="col-sm-7">
                <h2 data-animation-direction="from-left" data-animation-delay="100"><?php echo $grid_title; ?></h2>
                <?php echo $grid_description ?>
                <a href="<?php echo $agents_link; ?>" class="btn btn-default-color" data-animation-direction="from-left" data-animation-delay="500"><?php _e( 'Find an Agent', 'cozy' );?></a>
            </div>

            <div class="col-sm-5" data-animation-direction="from-right" data-animation-delay="150">
                <div class="mapborder">
                    <div id="map_agency" class="gmap"></div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</div>