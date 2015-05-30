<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_service_display']) : ?>
<div class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_service_title']?></h1>

                <?php
                $limit = $wt_cozy['section_service_number'];
                $args = array(
                    'post_type'         => 'service',
                    'post_status'       => 'publish',
                    'posts_per_page'    => $limit,
                );
                $service_query = new WP_Query( $args );?>

                <ul class="services">
                    <?php while($service_query->have_posts()): $service_query->the_post();

                    $service_icon_text = get_post_meta( get_the_ID(), '_wt_service_icon_text', true );
                    $service_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_service_description', true )));
                    $archive_url = get_post_type_archive_link('service');
                    ?>
                    <li class="col-md-3" data-animation-direction="from-bottom" data-animation-delay="250">
                        <h3><i class="fa <?php echo $service_icon_text; ?>"></i> <?php the_title() ?></h3>
                        <?php echo $service_description; ?> <a href="<?php the_permalink(); ?>"><?php _e( 'Learn more', 'cozy' );?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>


                <div class="center">
                    <a href="<?php echo $archive_url; ?>" class="btn btn-default-color" data-animation-direction="from-bottom" data-animation-delay="1050"><?php _e('Register Now!','') ?></a>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>