<?php global $wt_cozy; ?>
<div id="testimonials" class="col-sm-4">
    <h2 class="section-title" data-animation-direction="from-right" data-animation-delay="50"><?php echo $wt_cozy['section_testimonial_title']?></h2>
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
        $test_name = get_post_meta( get_the_ID(), '_wt_test_name', true );
        $test_designation = get_post_meta( get_the_ID(), '_wt_test_designation', true );
    ?>

    <div class="item">
        <blockquote class="text" data-animation-direction="from-right" data-animation-delay="250">
            <?php echo $test_description; ?>
        </blockquote>
        <div class="author" data-animation-direction="from-right" data-animation-delay="450">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('sidebar-thumb', array('class' => 'img-responsive'));
            }
            else {
                echo '<img src="http://placehold.it/61x61" alt="placeholder" />';
            }
            ?>
            <div>
                <?php echo $test_name; ?><br>
                <span><?php echo $test_designation; ?></span>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div>
</div>