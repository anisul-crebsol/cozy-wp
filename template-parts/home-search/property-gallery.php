<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_gallery_title']?></h1>
<p class="center" data-animation-direction="from-bottom" data-animation-delay="150"><?php echo $wt_cozy['cozy_gallery_description']?></p>

<div id="property-gallery" class="owl-carousel property-gallery">
    <?php
        $limit = $wt_cozy['property_gallery_number'];
        $args = array(
            'post_type'         => 'property',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $property_query = new WP_Query( $args );

        while($property_query->have_posts()): $property_query->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_large' );
        $title = get_post(get_post_thumbnail_id())->post_title;
    ?>
    <div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
        <a href="<?php if(has_post_thumbnail()) { echo $url = $thumb['0']; } else {echo 'http://placehold.it/760x670';} ?>" data-gal="prettyPhoto[gallery]" title="<?php echo $title; ?>"><span class="btn btn-default">+</span>
        </a>
        <?php echo wt_cozy_thumbnail('246x216'); ?>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>