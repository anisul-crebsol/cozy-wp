<?php global $wt_cozy; ?>
<?php if ($wt_cozy['section_testimonial_display']) : ?>
<div class="parallax dark-bg" style="background-image:url(http://placehold.it/1920x800);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" data-animation-direction="from-top" data-animation-delay="50">
                <h2 class="section-title"><?php echo $wt_cozy['section_testimonial_title']?></h2>

                <div id="testimonials-slider" class="owl-carousel testimonials">

                    <?php
                        $limit = $wt_cozy['section_testimonial_number'];
                        $args = array(
                            'post_type'         => 'testimonial',
                            'post_status'       => 'publish',
                            'posts_per_page'    => $limit,
                        );
                        $testimonial_query = new WP_Query( $args );?>

                    <?php

                        while($testimonial_query->have_posts()): $testimonial_query->the_post();

                        $test_description = do_shortcode(wpautop(get_post_meta( get_the_ID(), '_wt_test_description', true )));
                        $test_image = get_post_meta( get_the_ID(), '_wt_test_image', true );
                        $test_name = get_post_meta( get_the_ID(), '_wt_test_name', true );
                        $test_designation = get_post_meta( get_the_ID(), '_wt_test_designation', true );
                    ?>

                    <div class="item">
                        <blockquote class="text">
                            <p><?php echo $test_description; ?></p>
                        </blockquote>
                        <div class="col-md-5 center">
                            <div class="author">
                                <img src="<?php echo $test_image; ?>" alt="" />
                                <div>
                                    <?php echo $test_name; ?><br>
                                    <span><?php echo $test_designation; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>